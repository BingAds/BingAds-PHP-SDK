<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v11\CampaignManagement classes that will be used.
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
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\v11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\v11\CustomerManagementHelper;

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

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // To discover all remarketing lists that the user can associate with ad groups in the current account (per CustomerAccountId header), 
    // set RemarketingListIds to null when calling the GetAudiencesByIds operation.

    $remarketingLists = CampaignManagementHelper::GetAudiencesByIds(null, array(AudienceType::RemarketingList))->Audiences;

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

    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementHelper::AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds->long;
    CampaignManagementHelper::OutputIds($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addCampaignsResponse->PartialErrors->BatchError);
    }

    print "AddAdGroups\n";
    $addAdGroupsResponse = CampaignManagementHelper::AddAdGroups($nillableCampaignIds[0], $adGroups);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    CampaignManagementHelper::OutputIds($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addAdGroupsResponse->PartialErrors->BatchError);
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

            $adGroupCriterion->AdGroupId = $nillableAdGroupIds[0];
            $adGroupCriterion->Status = AdGroupCriterionStatus::Active;
            
            $adGroupCriterions[] = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());

            print("\nAssociating the following remarketing list with the ad group.\n\n");
            CampaignManagementHelper::OutputRemarketingList($remarketingList);
        }
    }

    $addAdGroupCriterionsResponse = CampaignManagementHelper::AddAdGroupCriterions($adGroupCriterions, AdGroupCriterionType::Audience);
    
    // You can store the association IDs which can be used to update or delete associations later. 

    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds->long;

    $getAdGroupCriterionsByIdsResponse = CampaignManagementHelper::GetAdGroupCriterionsByIds($nillableAdGroupIds[0], $adGroupCriterionIds, AdGroupCriterionType::RemarketingList);

    if(!empty($getAdGroupCriterionsByIdsResponse->AdGroupCriterions)){
        foreach ($getAdGroupCriterionsByIdsResponse->AdGroupCriterions->AdGroupCriterion as $AdGroupCriterion)
        {
            print("\nThe following ad group remarketing list association was added.\n\n");
            CampaignManagementHelper::OutputAdGroupCriterion($AdGroupCriterion);
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

        $updateAdGroupCriterion->AdGroupId = $nillableAdGroupIds[0];
        $updateAdGroupCriterion->Id = $adGroupCriterionIds[0];
        $updateAdGroupCriterion->Status = AdGroupCriterionStatus::Active;
        
        $adGroupCriterions[] = new SoapVar($updateAdGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
        
        $updateAdGroupCriterionsResponse = CampaignManagementHelper::UpdateAdGroupCriterions($adGroupCriterions, AdGroupCriterionType::Audience);
        
        $deleteAdGroupCriterionsResponse = CampaignManagementHelper::DeleteAdGroupCriterions($nillableAdGroupIds[0], $adGroupCriterionIds, AdGroupCriterionType::Audience);
    }

    // Delete the campaign, ad group, and ad group remarketing list associations that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    CampaignManagementHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds[0]));
    printf("\nDeleted CampaignId %d\n\n", $nillableCampaignIds[0]);
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

?>
