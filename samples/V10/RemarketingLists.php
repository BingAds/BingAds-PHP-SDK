<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v10\CampaignManagement classes that will be used.
use Microsoft\BingAds\v10\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetRemarketingListsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddAdGroupRemarketingListAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteAdGroupRemarketingListAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetAdGroupRemarketingListAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateAdGroupRemarketingListAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\Campaign;
use Microsoft\BingAds\v10\CampaignManagement\CampaignType;
use Microsoft\BingAds\v10\CampaignManagement\AdGroup;
use Microsoft\BingAds\v10\CampaignManagement\AdGroupRemarketingListAssociation;
use Microsoft\BingAds\v10\CampaignManagement\AdGroupRemarketingListAssociationStatus;
use Microsoft\BingAds\v10\CampaignManagement\RemarketingList;
use Microsoft\BingAds\v10\CampaignManagement\RemarketingTargetingSetting;
use Microsoft\BingAds\v10\CampaignManagement\EntityScope;
use Microsoft\BingAds\v10\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v10\CampaignManagement\AdDistribution;
use Microsoft\BingAds\v10\CampaignManagement\Bid;
use Microsoft\BingAds\v10\CampaignManagement\BiddingModel;
use Microsoft\BingAds\v10\CampaignManagement\PricingModel;
use Microsoft\BingAds\v10\CampaignManagement\Date;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;

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

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // To discover all remarketing lists that the user can associate with ad groups in the current account (per CustomerAccountId header), 
    // set RemarketingListIds to null when calling the GetRemarketingLists operation.

    $remarketingLists = GetRemarketingLists(null)->RemarketingLists;

    // You must already have at least one remarketing list for the remainder of this example. 
    // The Bing Ads API does not support remarketing list add, update, or delete operations.

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
    $adGroup->BiddingModel = BiddingModel::Keyword;
    $adGroup->PricingModel = PricingModel::Cpc;
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
    $campaignErrors = $addCampaignsResponse->PartialErrors;
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        $campaignErrors = $addCampaignsResponse->PartialErrors->BatchError;
    }
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);
    
    $addAdGroupsResponse = AddAdGroups($campaignIds[0], $adGroups);
    $adGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    $adGroupErrors = $addAdGroupsResponse->PartialErrors;
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        $adGroupErrors = $addAdGroupsResponse->PartialErrors->BatchError;
    }
    OutputAdGroupsWithPartialErrors($adGroups, $adGroupIds, $adGroupErrors);


    // If the campaign or ad group add operations failed then we cannot continue this example. 

    if (empty($addAdGroupsResponse->AdGroupIds) || count($addAdGroupsResponse->AdGroupIds) < 1)
    {
        return;
    }

   $adGroupRemarketingListAssociations = array();

    // This example associates all of the remarketing lists with the new ad group.

    foreach ($remarketingLists->RemarketingList as $remarketingList)
    {
        if ($remarketingList->Id != null)
        {
            $adGroupRemarketingListAssociation = new AdGroupRemarketingListAssociation();
            $adGroupRemarketingListAssociation->AdGroupId = $adGroupIds[0];
            $adGroupRemarketingListAssociation->BidAdjustment = 20.00;
            $adGroupRemarketingListAssociation->RemarketingListId = $remarketingList->Id;
            $adGroupRemarketingListAssociation->Status = AdGroupRemarketingListAssociationStatus::Paused;
            
            $adGroupRemarketingListAssociations[] = $adGroupRemarketingListAssociation;

            print("\nAssociating the following remarketing list with the ad group.\n\n");
            OutputRemarketingList($remarketingList);
        }
    }

    $addAdGroupRemarketingListAssociationsResponse = AddAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations);

    $getAdGroupRemarketingListAssociationsResponse = GetAdGroupRemarketingListAssociations($adGroupIds);

    if(!empty($getAdGroupRemarketingListAssociationsResponse->AdGroupRemarketingListAssociations)){
        foreach ($getAdGroupRemarketingListAssociationsResponse->AdGroupRemarketingListAssociations->AdGroupRemarketingListAssociation as $adGroupRemarketingListAssociation)
        {
            print("\nThe following ad group remarketing list association was added.\n\n");
            OutputAdGroupRemarketingListAssociation($adGroupRemarketingListAssociation);
        }
    }
    

    // You can store the association IDs which can be used to update or delete associations later. 

    $associationIds = $addAdGroupRemarketingListAssociationsResponse->AssociationIds->long;
    
    // If the associations were added and retrieved successfully let's practice updating and deleting one of them.

    if ($associationIds != null && count($associationIds) > 0)
    {
        $adGroupRemarketingListAssociations = array();
        
        $updateAdGroupRemarketingListAssociation = new AdGroupRemarketingListAssociation();
        $updateAdGroupRemarketingListAssociation->AdGroupId = $adGroupIds[0];
        $updateAdGroupRemarketingListAssociation->BidAdjustment = 10.00;
        $updateAdGroupRemarketingListAssociation->Id = $associationIds[0];
        $updateAdGroupRemarketingListAssociation->Status = AdGroupRemarketingListAssociationStatus::Active;
        
        $adGroupRemarketingListAssociations[] = $updateAdGroupRemarketingListAssociation;
        
        $updateAdGroupRemarketingListAssociationsResponse = UpdateAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations);
        
        $deleteAdGroupRemarketingListAssociationsResponse = DeleteAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations);
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

// Retrieves remarketing lists. If RemarketingListIds is null or empty,
// the service will return all remarketing lists that the current authenticated user can access.

function GetRemarketingLists($remarketingListIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetRemarketingListsRequest();
    $request->RemarketingListIds = $remarketingListIds;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetRemarketingLists($request);
}

// Associates the specified ad groups with the respective remarketing lists.

function AddAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddAdGroupRemarketingListAssociationsRequest();
    $request->AdGroupRemarketingListAssociations = $adGroupRemarketingListAssociations;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddAdGroupRemarketingListAssociations($request);
}

// Deletes one or more ad group remarketing list associations.

function DeleteAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteAdGroupRemarketingListAssociationsRequest();
    $request->AdGroupRemarketingListAssociations = $adGroupRemarketingListAssociations;
        
    return $GLOBALS['CampaignProxy']->GetService()->DeleteAdGroupRemarketingListAssociations($request);
}

// Gets the ad group remarketing list associations.

function GetAdGroupRemarketingListAssociations($adGroupIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetAdGroupRemarketingListAssociationsRequest();
    $request->AdGroupIds = $adGroupIds;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupRemarketingListAssociations($request);
}

// Updates one or more ad group remarketing list associations.

function UpdateAdGroupRemarketingListAssociations($adGroupRemarketingListAssociations)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateAdGroupRemarketingListAssociationsRequest();
    $request->AdGroupRemarketingListAssociations = $adGroupRemarketingListAssociations;
    
    return $GLOBALS['CampaignProxy']->GetService()->UpdateAdGroupRemarketingListAssociations($request);
}

// Outputs the campaign identifiers, as well as any partial errors.

function OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $partialErrors)
{
    // Output the identifier of each successfully added campaign.

    for ($index = 0; $index < count($campaigns); $index++ )
    {
        // The array of campaign identifiers equals the size of the attempted campaign. If the element 
        // is not empty, the campaign at that index was added successfully and has a campaign identifer. 

        if (!empty($campaignIds[$index]))
        {
            printf("Campaign[%d] (Name:%s) successfully added and assigned CampaignId %s\n", 
                $index, 
                $campaigns[$index]->Name, 
                $campaignIds[$index] );
        }
    }

    // Output the error details for any campaign not successfully added.
    // Note also that multiple error reasons may exist for the same attempted campaign. 

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddCampaigns.

        printf("\nCampaign[%d] (Name:%s) not added due to the following error:\n", $error->Index, $campaigns[$error->Index]->Name);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the ad group identifiers, as well as any partial errors.

function OutputAdGroupsWithPartialErrors($adGroups, $adGroupIds, $partialErrors)
{
    // Output the identifier of each successfully added ad group.

    for ($index = 0; $index < count($adGroups); $index++ )
    {
        // The array of ad group identifiers equals the size of the attempted ad group. If the element 
        // is not empty, the ad group at that index was added successfully and has an ad group identifer. 

        if (!empty($adGroupIds[$index]))
        {
            printf("AdGroup[%d] (Name:%s) successfully added and assigned AdGroupId %s\n", 
                $index, 
                $adGroups[$index]->Name, 
                $adGroupIds[$index] );
        }
    }

    // Output the error details for any ad group not successfully added.
    // Note also that multiple error reasons may exist for the same attempted ad group.

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddAdGroups.

        printf("\nAdGroup[%d] (Name:%s) not added due to the following error:\n", $error->Index, $adGroups[$error->Index]->Name);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the remarketing list.

function OutputRemarketingList($remarketingList)
{
    if ($remarketingList != null)
    {
        printf("Description: %s\n", $remarketingList->Description);
        if ($remarketingList->ForwardCompatibilityMap != null)
        {
            foreach ($remarketingList->ForwardCompatibilityMap as $pair)
            {
                printf("\tKey: %s\n", $pair->Key);
                printf("\tValue: %s\n", $pair->Value);
            }
        }
        printf("Id: %s\n", $remarketingList->Id);
        printf("MembershipDuration: %s\n", $remarketingList->MembershipDuration);
        printf("Name: %s\n", $remarketingList->Name);
        printf("ParentId: %s\n", $remarketingList->ParentId);
        printf("Scope: %s\n", $remarketingList->Scope);
        printf("TagId: %s\n\n", $remarketingList->TagId);
    }
    
}

// Outputs the ad group remarketing list association.

function OutputAdGroupRemarketingListAssociation($adGroupRemarketingListAssociation)
{
    if ($adGroupRemarketingListAssociation != null)
    {
        printf("AdGroupId: %s\n", $adGroupRemarketingListAssociation->AdGroupId);
        printf("BidAdjustment: %s\n", $adGroupRemarketingListAssociation->BidAdjustment);
        printf("Id: %s\n", $adGroupRemarketingListAssociation->Id);
        printf("RemarketingListId: %s\n", $adGroupRemarketingListAssociation->RemarketingListId);
        printf("Status: %s\n\n", $adGroupRemarketingListAssociation->Status);
    }
}


?>