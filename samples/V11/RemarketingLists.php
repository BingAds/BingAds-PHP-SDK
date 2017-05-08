<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v11\CampaignManagement classes that will be used.
use Microsoft\BingAds\v11\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAudiencesByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AddAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\DeleteAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\UpdateAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\Campaign;
use Microsoft\BingAds\v11\CampaignManagement\CampaignType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroup;
use Microsoft\BingAds\v11\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\v11\CampaignManagement\Audience;
use Microsoft\BingAds\v11\CampaignManagement\AudienceCriterion;
use Microsoft\BingAds\v11\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\v11\CampaignManagement\AudienceType;
use Microsoft\BingAds\v11\CampaignManagement\RemarketingList;
use Microsoft\BingAds\v11\CampaignManagement\RemarketingTargetingSetting;
use Microsoft\BingAds\v11\CampaignManagement\EntityScope;
use Microsoft\BingAds\v11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\v11\CampaignManagement\Bid;
use Microsoft\BingAds\v11\CampaignManagement\Date;

// Specify the Microsoft\BingAds\v11\CustomerManagement classes that will be used.
use Microsoft\BingAds\v11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v11\CustomerManagement\Paging;
use Microsoft\BingAds\v11\CustomerManagement\Predicate;
use Microsoft\BingAds\v11\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // To discover all remarketing lists that the user can associate with ad groups in the current account (per CustomerAccountId header), 
    // set RemarketingListIds to null when calling the GetAudiencesByIds operation.

    $remarketingLists = GetAudiencesByIds(null, array(AudienceType::RemarketingList))->Audiences;

    // You must already have at least one remarketing list for the remainder of this example. 

    if (count($remarketingLists) < 1)
    {
        return;
    }
                
    // Add an ad group in a campaign. The ad group will later be associated with remarketing lists. 
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    $campaigns[] = $campaign;

    
    $adGroups = array();

    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");

    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Heated Ski Glove Sale";
    $adGroup->AdDistribution = AdDistribution::Search;
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->SearchBid = new Bid();
    $adGroup->SearchBid->Amount = 0.07;
    $adGroup->Language = "English";

    // Applicable for all remarketing lists that are associated with this ad group. TargetAndBid indicates 
    // that you want to show ads only to people included in the remarketing list, with the option to change
    // the bid amount. Ads in this ad group will only show to people included in the remarketing list.
    $adGroup->RemarketingTargetingSetting = RemarketingTargetingSetting::TargetAndBid;
    
    $adGroups[] = $adGroup;

    $addCampaignsResponse = AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $campaignIds = $addCampaignsResponse->CampaignIds->long;
    OutputIds($campaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        OutputPartialErrors($addCampaignsResponse->PartialErrors->BatchError);
    }

    $addAdGroupsResponse = AddAdGroups($campaignIds[0], $adGroups);
    $adGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    OutputIds($adGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        OutputPartialErrors($addAdGroupsResponse->PartialErrors->BatchError);
    }

    // If the campaign or ad group add operations failed then we cannot continue this example. 

    if (empty($addAdGroupsResponse->AdGroupIds) || count($addAdGroupsResponse->AdGroupIds) < 1)
    {
        return;
    }

   $adGroupCriterions = array();

    // This example associates all of the remarketing lists with the new ad group.

    foreach ($remarketingLists->Audience as $remarketingList)
    {
        if ($remarketingList->Id != null)
        {
            $adGroupCriterion = new BiddableAdGroupCriterion();
            
            $criterion = new AudienceCriterion();
            $criterion->AudienceId = $remarketingList->Id;
            $criterion->AudienceType = AudienceType::RemarketingList;
            $adGroupCriterion->Criterion = new SoapVar($criterion, SOAP_ENC_OBJECT, 'AudienceCriterion', $GLOBALS['CampaignProxy']->GetNamespace());

            $criterionBid = new BidMultiplier();
            $criterionBid->Multiplier = 20.00;
            $adGroupCriterion->CriterionBid = new SoapVar($criterionBid, SOAP_ENC_OBJECT, 'BidMultiplier', $GLOBALS['CampaignProxy']->GetNamespace());

            $adGroupCriterion->AdGroupId = $adGroupIds[0];
            $adGroupCriterion->Status = AdGroupCriterionStatus::Active;
            
            $adGroupCriterions[] = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());

            print("\nAssociating the following remarketing list with the ad group.\n\n");
            OutputRemarketingList($remarketingList);
        }
    }

    $addAdGroupCriterionsResponse = AddAdGroupCriterions($adGroupCriterions, AdGroupCriterionType::Audience);
    
    // You can store the association IDs which can be used to update or delete associations later. 

    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds->long;

    $getAdGroupCriterionsByIdsResponse = GetAdGroupCriterionsByIds($adGroupIds[0], $adGroupCriterionIds, AdGroupCriterionType::RemarketingList);

    if(!empty($getAdGroupCriterionsByIdsResponse->AdGroupCriterions)){
        foreach ($getAdGroupCriterionsByIdsResponse->AdGroupCriterions->AdGroupCriterion as $AdGroupCriterion)
        {
            print("\nThe following ad group remarketing list association was added.\n\n");
            OutputAdGroupCriterion($AdGroupCriterion);
        }
    }
    
    
    // If the associations were added and retrieved successfully let's practice updating and deleting one of them.

    if ($adGroupCriterionIds != null && count($adGroupCriterionIds) > 0)
    {
        $adGroupCriterions = array();
        
        $updateAdGroupCriterion = new BiddableAdGroupCriterion();

        $criterion = new AudienceCriterion();
        $criterion->AudienceType = AudienceType::RemarketingList;
        $updateAdGroupCriterion->Criterion = new SoapVar($criterion, SOAP_ENC_OBJECT, 'AudienceCriterion', $GLOBALS['CampaignProxy']->GetNamespace());

        $criterionBid = new BidMultiplier();
        $criterionBid->Multiplier = 10.00;
        $updateAdGroupCriterion->CriterionBid = new SoapVar($criterionBid, SOAP_ENC_OBJECT, 'BidMultiplier', $GLOBALS['CampaignProxy']->GetNamespace());

        $updateAdGroupCriterion->AdGroupId = $adGroupIds[0];
        $updateAdGroupCriterion->Id = $adGroupCriterionIds[0];
        $updateAdGroupCriterion->Status = AdGroupCriterionStatus::Active;
        
        $adGroupCriterions[] = new SoapVar($updateAdGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
        
        $updateAdGroupCriterionsResponse = UpdateAdGroupCriterions($adGroupCriterions, AdGroupCriterionType::Audience);
        
        $deleteAdGroupCriterionsResponse = DeleteAdGroupCriterions($adGroupIds[0], $adGroupCriterionIds, AdGroupCriterionType::Audience);
    }

    // Delete the campaign, ad group, and ad group remarketing list associations that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("\nDeleted CampaignId %d\n\n", $campaignIds[0]);
}
catch (SoapFault $e)
{
    // Output the last request/response.
	
    print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    // Campaign Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
        ? $e->detail->AdApiFaultDetail->Errors->AdApiError
        : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

        // If the AdApiError array is not null, the following are examples of error codes that may be found.
        foreach ($errors as $error)
        {
            print "AdApiError\n";
            printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
                    break;
            }
        }
    }

    // Campaign Management service operations can throw ApiFaultDetail.
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        // If the BatchError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
            ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

            foreach ($errors as $error)
            {
                printf("BatchError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the EditorialError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
            ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

            foreach ($errors as $error)
            {
                printf("EditorialError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the OperationError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
            ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
            : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

            foreach ($errors as $error)
            {
                print "OperationError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    case 106:   // UserIsNotAuthorized
                        break;
                    case 1102:  // CampaignServiceInvalidAccountId
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Gets a User object by the specified UserId.

function GetUser($userId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
}

// Searches by UserId for accounts that the user can manage.

function SearchAccountsByUserId($userId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $userId; 

    $request = new SearchAccountsRequest();
    $request->Ordering = null;
    $request->PageInfo = $pageInfo;
    $request->Predicates = array($predicate);

    return $GLOBALS['Proxy']->GetService()->SearchAccounts($request)->Accounts;
}

// Adds one or more campaigns to the specified account.

function AddCampaigns($accountId, $campaigns)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddCampaigns($request);
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($accountId, $campaignIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteCampaigns($request);
}

// Adds one or more ad groups to the specified campaign.

function AddAdGroups($campaignId, $adGroups)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddAdGroupsRequest();
    $request->CampaignId = $campaignId;
    $request->AdGroups = $adGroups;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddAdGroups($request);
}

// Retrieves remarketing lists. If audienceIds is null or empty,
// the service will return all remarketing lists that the current authenticated user can access.

function GetAudiencesByIds($audienceIds, $audienceType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetAudiencesByIdsRequest();
    $request->AudienceIds = $audienceIds;
    $request->Type = $audienceType;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetAudiencesByIds($request);
}


function AddAdGroupCriterions($adGroupCriterions, $criterionType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddAdGroupCriterionsRequest();
    $request->AdGroupCriterions = $adGroupCriterions;
    $request->CriterionType = $criterionType;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddAdGroupCriterions($request);
}


function DeleteAdGroupCriterions($adGroupId, $adGroupCriterionIds, $criterionType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteAdGroupCriterionsRequest();
    $request->AdGroupId = $adGroupId;
    $request->AdGroupCriterionIds = $adGroupCriterionIds;
    $request->CriterionType = $criterionType;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteAdGroupCriterions($request);
}


function GetAdGroupCriterionsByIds($adGroupId, $adGroupCriterionIds, $criterionType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetAdGroupCriterionsByIdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->AdGroupCriterionIds = $adGroupCriterionIds;
    $request->CriterionType = $criterionType;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupCriterionsByIds($request);
}

function UpdateAdGroupCriterions($adGroupCriterions, $criterionType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateAdGroupCriterionsRequest();
    $request->AdGroupCriterions = $adGroupCriterions;
    $request->CriterionType = $criterionType;
    
    return $GLOBALS['CampaignProxy']->GetService()->UpdateAdGroupCriterions($request);
}

// Outputs the list of ids.

function OutputIds($ids)
{
    if(count((array)$ids) == 0)
    {
        return;
    }

    foreach ($ids as $id)
    {
        if(!is_null($id)){
            printf("Id: %s\n", $id);
        }
        else{
            printf("Nil Id\n");
        }
        
    }
}

// Outputs a list of BatchError objects that represent partial errors while managing negative keywords.

function OutputPartialErrors($partialErrors)
{
    if(count((array)$partialErrors) == 0)
    {
        return;
    }

    print "BatchError (PartialErrors) items:\n\n";
    foreach ($partialErrors->BatchError as $error)
    {
        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n\n", $error->Message);

        // In the case of an EditorialError, more details are available
        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n\n", $error->ReasonCode);
        }
    }
}


// Outputs the remarketing list.

function OutputRemarketingList($remarketingList)
{
    if ($remarketingList != null)
    {
        // Output inherited properties of the Audience base class.
        OutputAudience($remarketingList);

        // Output properties that are specific to the RemarketingList
        printf("TagId: %s\n\n", $remarketingList->TagId);
        OutputRemarketingRule($remarketingList->Rule);       
    }
}

// Outputs the audience.

function OutputAudience($audience)
{
    if ($audience != null)
    {
        printf("Description: %s\n", $audience->Description);
        if ($audience->ForwardCompatibilityMap != null)
        {
            foreach ($audience->ForwardCompatibilityMap as $pair)
            {
                printf("\tKey: %s\n", $pair->Key);
                printf("\tValue: %s\n", $pair->Value);
            }
        }
        printf("Id: %s\n", $audience->Id);
        printf("MembershipDuration: %s\n", $audience->MembershipDuration);
        printf("Name: %s\n", $audience->Name);
        printf("ParentId: %s\n", $audience->ParentId);
        printf("Scope: %s\n", $audience->Scope);
    }
}

function OutputRemarketingRule($remarketingRule)
{
    if ($remarketingRule != null)
    {
        printf("Type: %s\n", $remarketingRule->Type);
        
        if ($remarketingRule->Type === "CustomEvents")
        {
            printf("Action: %s\n", $remarketingRule->Action);
            printf("ActionOperator: %s\n", $remarketingRule->ActionOperator);
            printf("Category: %s\n", $remarketingRule->Category);
            printf("CategoryOperator: %s\n", $remarketingRule->CategoryOperator);
            printf("Label: %s\n", $remarketingRule->Label);
            printf("LabelOperator: %s\n", $remarketingRule->LabelOperator);
            printf("Value: %s\n", $remarketingRule->Value);
            printf("ValueOperator: %s\n", $remarketingRule->ValueOperator);
        }    		
        else if ($remarketingRule->Type === "PageVisitors")
        {
            if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                print("RuleItemGroups: \n");
                OutputRuleItemGroups($remarketingRule->RuleItemGroups);
            }
        }
        else if ($remarketingRule->Type === "PageVisitorsWhoDidNotVisitAnotherPage")
        {
            if(isset($remarketingRule->ExcludeRuleItemGroups->RuleItemGroup)){
                print("ExcludeRuleItemGroups: \n");
                OutputRuleItemGroups($remarketingRule->ExcludeRuleItemGroups);
            }
            if(isset($remarketingRule->IncludeRuleItemGroups->RuleItemGroup)){
                print("IncludeRuleItemGroups: \n");
                OutputRuleItemGroups($remarketingRule->IncludeRuleItemGroups);
            }
        }
        else if ($remarketingRule->Type === "PageVisitorsWhoVisitedAnotherPage")
        {
            if(isset($remarketingRule->AnotherRuleItemGroups->RuleItemGroup)){
                print("AnotherRuleItemGroups: \n");
                OutputRuleItemGroups($remarketingRule->AnotherRuleItemGroups);
            }
            if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                print("RuleItemGroups: \n");
                OutputRuleItemGroups($remarketingRule->RuleItemGroups);
            }
        }
        else
        {
            printf("Unknown remarketing rule type: %s\n", $remarketingRule->Type);
        }
    }
}

// Outputs the list of rule item groups.

function OutputRuleItemGroups($ruleItemGroups)
{
    if(count((array)$ruleItemGroups) == 0)
    {
        return;
    }

    foreach ($ruleItemGroups as $ruleItemGroup)
    {
        if(isset($ruleItemGroup->Items->RuleItem)){
            foreach($ruleItemGroup->Items->RuleItem as $ruleItem){
                if ($ruleItem->Type === "StringRuleItem")
                {
                    print("\tRuleItem: \n");
                    printf("\tOperand: %s\n", $ruleItem->Operand);
                    printf("\tOperator: %s\n", $ruleItem->Operator);
                    printf("\tValue: %s\n", $ruleItem->Value);
                }
                else
                {
                    print("Unknown remarketing rule item type.\n");
                }
            }
        }
    }
}

function OutputAdGroupCriterion($criterion)
{
    if ($criterion != null)
    {
        printf("AdGroupId: %s\n", $criterion->AdGroupId);
        OutputCriterion($criterion->Criterion);
        printf("Id: %s\n", $criterion->Id);
        printf("Status: %s\n\n", $criterion->Status);
        printf("AdGroupCriterion Type: %s\n", $criterion->Type);
    }
}

function OutputBiddableAdGroupCriterion($criterion)
{
    if ($criterion != null)
    {
        // Output inherited properties of the AdGroupCriterion base class.
        OutputAdGroupCriterion($criterion);

        // Output properties that are specific to the BiddableAdGroupCriterion
        OutputCriterionBid($criterion->CriterionBid);
                
        printf("DestinationUrl: %s\n", $criterion->DestinationUrl);
        printf("EditorialStatus: %s\n", $criterion->EditorialStatus);

        print("FinalMobileUrls: \n");
        foreach ($criterion->FinalMobileUrls as $finalMobileUrl)
        {
            print("\t" . $finalMobileUrl . "\n");
        }
        print("FinalUrls: \n");
        foreach ($criterion->FinalUrls as $finalUrl)
        {
            print("\t" . $finalUrl . "\n");
        }
        print("TrackingUrlTemplate: " . $criterion->TrackingUrlTemplate . "\n");
        print("UrlCustomParameters: \n");
        if ($criterion->UrlCustomParameters != null && $criterion->UrlCustomParameters->Parameters != null)
        {
            foreach ($criterion->UrlCustomParameters->Parameters as $customParameter)
            {
                print("\tKey: " . $customParameter->Key . "\n");
                print("\tValue: " . $customParameter->Value . "\n");
            }
        }
    }
}

function OutputNegativeAdGroupCriterion($criterion)
{
    if ($criterion != null)
    {
        // Output inherited properties of the AdGroupCriterion base class.
        OutputAdGroupCriterion($criterion);

        // There aren't any properties that are specific to the NegativeAdGroupCriterion
    }
}

function OutputCriterion($criterion)
{
    if ($criterion != null)
    {
        if ($criterion->Type === "ProductPartition")
        {
            OutputProductPartition($criterion);
        }
        else if ($criterion->Type === "ProductScope")
        {
            OutputProductScope($criterion);
        }
        else if ($criterion->Type === "Webpage")
        {
            OutputWebpage($criterion);
        }
        else if ($criterion->Type === "AudienceCriterion")
        {
            OutputAudienceCriterion($criterion);
        }
    }
}

function OutputCriterionBid($criterionBid)
{
    if ($criterionBid != null)
    {
        if ($criterionBid->Type === "FixedBid")
        {
            OutputFixedBid($criterionBid);
        }
        else if ($criterionBid->Type === "BidMultiplier")
        {
            OutputBidMultiplier($criterionBid);
        }
    }
}

function OutputFixedBid($criterionBid)
{
    if ($criterionBid != null)
    {
        printf("Fixed Bid Amount: %s\n", $criterionBid->Amount);
    }
}

function OutputBid($criterionBid)
{
    if ($criterionBid != null)
    {
        printf("Bid Multiplier: %s\n", $criterionBid->Multiplier);
    }
}

function OutputProductPartition($criterion)
{
    if ($criterion != null)
    {
        printf("ParentCriterionId: %s\n", $criterion->ParentCriterionId);
        printf("PartitionType: %s\n", $criterion->PartitionType);
        if(isset($criterion->Condition))
        {
            print("Condition:\n");
            printf("Operand: %s\n", $criterion->Condition->Operand);
            printf("Attribute: %s\n", $criterion->Condition->Attribute);
        }
    }
}

function OutputProductScope($criterion)
{
    if ($criterion != null and isset($criterion->Conditions))
    {
        print("Product Conditions:\n");
        foreach ($criterion->Conditions->ProductCondition as $productCondition)
        {
            printf("Operand: %s\n", $productCondition->Operand);
            printf("Attribute: %s\n", $productCondition->Attribute);
        }
    }
}

function OutputWebpage($criterion)
{
    if ($criterion != null and isset($criterion->Parameter->Conditions))
    {
        printf("Webpage CriterionName: %s\n", $criterion->Parameter->CriterionName);

        print("Webpage Conditions:\n");
        foreach ($criterion->Parameter->Conditions->WebpageCondition as $webpageCondition)
        {
            printf("Operand: %s\n", $webpageCondition->Operand);
            printf("Attribute: %s\n", $webpageCondition->Attribute);
        }
    }
}

function OutputAudienceCriterion($criterion)
{
    if ($criterion != null)
    {
        printf("AudienceId: %s\n", $criterion->AudienceId);
        printf("AudienceType: %s\n", $criterion->AudienceType);
        printf("Type: %s\n", $criterion->Type);
    }
}

?>
