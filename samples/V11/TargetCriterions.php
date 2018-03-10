<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\Campaign;
use Microsoft\BingAds\V11\CampaignManagement\AdGroup;
use Microsoft\BingAds\V11\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V11\CampaignManagement\DeviceCriterion;
use Microsoft\BingAds\V11\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\V11\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterion;
use Microsoft\BingAds\V11\CampaignManagement\LocationCriterion;
use Microsoft\BingAds\V11\CampaignManagement\LocationIntentCriterion;
use Microsoft\BingAds\V11\CampaignManagement\IntentOption;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterionStatus;
use Microsoft\BingAds\V11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\V11\CampaignManagement\Bid;
use Microsoft\BingAds\V11\CampaignManagement\Date;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\V11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\V11\CustomerManagementHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    AuthHelper::AuthenticateWithOAuth();

    // Bing Ads API Version 11 is the last version to support UserName and Password authentication,
    // so this function is deprecated.
    //AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $campaignIds = GetExampleCampaignIds();
    
    // You can set campaignIds null to get all campaigns in the account, instead of 
    // adding and retrieving the example campaigns.

    $getCampaigns = CampaignManagementHelper::GetCampaignsByIds(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaignIds, 
        CampaignManagementHelper::AllCampaignTypes)->Campaigns;
    
    // Loop through all campaigns and ad groups to get the target criterion IDs.

    foreach ($getCampaigns->Campaign as $campaign)
    {
        $campaignId = $campaign->Id;

        // Set campaignCriterionIds null to get all criterions 
        // (of the specified target criterion type or types) for the current campaign.
        
        $campaignCriterions = CampaignManagementHelper::GetCampaignCriterionsByIds(
            $campaignId,
            null,
            CampaignManagementHelper::AllTargetCampaignCriterionTypes)->CampaignCriterions;

        // When you first create a campaign or ad group using the Bing Ads API, it will not have any 
        // criterions. Effectively, the brand new campaign and ad group target all ages, days, hours, 
        // devices, genders, and locations. As a best practice, you should consider at a minimum 
        // adding a campaign location criterion corresponding to the customer market country.

        if(empty($campaignCriterions) || !(isset($campaignCriterions->CampaignCriterion)))
        {
            $campaignCriterions = array();

            $locationBiddableCampaignCriterion = new BiddableCampaignCriterion();
            $locationBiddableCampaignCriterion->CampaignId = $campaignId;
            $locationCriterion = new LocationCriterion();
            $locationCriterion->LocationId = 190;
            $encodedLocationCriterion = new SoapVar($locationCriterion, SOAP_ENC_OBJECT, 'LocationCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
            $locationBiddableCampaignCriterion->Criterion = $encodedLocationCriterion;
            $bidMultiplier = new BidMultiplier();
            $bidMultiplier->Multiplier = 0;
            $encodedBidMultiplier = new SoapVar($bidMultiplier, SOAP_ENC_OBJECT, 'BidMultiplier', $GLOBALS['CampaignProxy']->GetNamespace());
            $locationBiddableCampaignCriterion->CriterionBid = $encodedBidMultiplier;

            $encodedCriterion = new SoapVar($locationBiddableCampaignCriterion, SOAP_ENC_OBJECT, 'BiddableCampaignCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
            $campaignCriterions[] = $encodedCriterion;

            $locationIntentBiddableCampaignCriterion = new BiddableCampaignCriterion();
            $locationIntentBiddableCampaignCriterion->CampaignId = $campaignId;
            $locationIntentCriterion = new LocationIntentCriterion();
            $locationIntentCriterion->IntentOption = IntentOption::PeopleInOrSearchingForOrViewingPages;
            $encodedLocationIntentCriterion = new SoapVar($locationIntentCriterion, SOAP_ENC_OBJECT, 'LocationIntentCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
            $locationIntentBiddableCampaignCriterion->Criterion = $encodedLocationIntentCriterion;

            $encodedCriterion = new SoapVar($locationIntentBiddableCampaignCriterion, SOAP_ENC_OBJECT, 'BiddableCampaignCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
            $campaignCriterions[] = $encodedCriterion;

            $addCampaignCriterionsResponse = CampaignManagementHelper::AddCampaignCriterions(
                $campaignCriterions,
                CampaignCriterionType::Targets
            );

            // Capture the new criterion IDs either via AddCampaignCriterionsResponse or you can call GetCampaignCriterionsByIds.

            $campaignCriterions = CampaignManagementHelper::GetCampaignCriterionsByIds(
                $campaignId,
                null,
                CampaignManagementHelper::AllTargetCampaignCriterionTypes)->CampaignCriterions;
        }
        
        // You can now store or output the campaign criterions.

        print("Campaign Criterions: \n\n");
        if(isset($campaignCriterions->CampaignCriterion)){
            CampaignManagementHelper::OutputCampaignCriterions($campaignCriterions->CampaignCriterion);
        }        

        $getAdGroups = CampaignManagementHelper::GetAdGroupsByCampaignId($campaignId)->AdGroups;

        // Loop through all ad groups to get the target criterion IDs.
        foreach ($getAdGroups->AdGroup as $adGroup)
        {
            $adGroupId = $adGroup->Id;

            // Set adGroupCriterionIds null to get all criterions 
            // (of the specified target criterion type or types) for the current ad group.
            $adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
                    $adGroupId,
                    null,
                    CampaignManagementHelper::AllTargetAdGroupCriterionTypes)->AdGroupCriterions;

            if (!empty($adGroupCriterions) && isset($adGroupCriterions->AdGroupCriterion))
            {
                // If the Smartphones device criterion already exists, we'll increase the bid multiplier by 5 percent.

                $updateAdGroupCriterions = array();
                foreach($adGroupCriterions->AdGroupCriterion as $adGroupCriterion)
                {
                    if ($adGroupCriterion->Type === "BiddableAdGroupCriterion" && 
                        $adGroupCriterion->Criterion->Type === "DeviceCriterion" && 
                        $adGroupCriterion->Criterion->DeviceName === "Smartphones")
                    {
                        $updateAdGroupCriterion = new BiddableAdGroupCriterion();
                        $updateAdGroupCriterion->Id = $adGroupCriterion->Id;
                        $updateAdGroupCriterion->AdGroupId = $adGroupCriterion->AdGroupId;
                        $deviceCriterion = new DeviceCriterion();
                        $deviceCriterion->DeviceName = $adGroupCriterion->Criterion->DeviceName;
                        $updateAdGroupCriterion->Criterion = new SoapVar($deviceCriterion, SOAP_ENC_OBJECT, 'DeviceCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
                        $criterionBid = new BidMultiplier();
                        $criterionBid->Multiplier = $adGroupCriterion->CriterionBid->Multiplier * 1.05;
                        $updateAdGroupCriterion->CriterionBid = new SoapVar($criterionBid, SOAP_ENC_OBJECT, 'BidMultiplier', $GLOBALS['CampaignProxy']->GetNamespace());

                        $updateAdGroupCriterions[] = new SoapVar($updateAdGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
                    }
                }
                
                $updateAdGroupCriterionsResponse = CampaignManagementHelper::UpdateAdGroupCriterions(
                    $updateAdGroupCriterions,
                    AdGroupCriterionType::Targets
                );

                $adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
                    $adGroupId,
                    null,
                    CampaignManagementHelper::AllTargetAdGroupCriterionTypes)->AdGroupCriterions;
                
                // You can now store or output the ad group criterions.

                print("Ad Group Criterions: \n\n");
                if(isset($adGroupCriterions->AdGroupCriterion))
                {
                    CampaignManagementHelper::OutputAdGroupCriterions($adGroupCriterions->AdGroupCriterion);
                }
            }
        }
    }

    // Delete the campaign and ad group that were previously added. 

    CampaignManagementHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
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

function GetExampleCampaignIds()
{
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Campaign One " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Red shoes line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 20.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";

    $campaigns[] = $campaign;

    
    $adGroups = array();

    date_default_timezone_set('UTC');

    for($index = 0; $index < 3; $index++)
    {
        $adGroup = new AdGroup();
        $adGroup->Name = "Women's Shoe Sale " . $index . " " . $_SERVER['REQUEST_TIME'];
        $adGroup->AdDistribution = AdDistribution::Search;
        $adGroup->StartDate = null;
        $endDate = new Date();
        $endDate->Day = 31;
        $endDate->Month = 12;
        $endDate->Year = date("Y");
        $adGroup->EndDate = $endDate;
        $adGroup->SearchBid = new Bid();
        $adGroup->SearchBid->Amount = 0.09;
        $adGroup->Language = "English";
        $adGroups[] = $adGroup;
    }

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

    $campaignIds = array();
    foreach($nillableCampaignIds as $campaignId)
    {
        $campaignIds[] = $campaignId;
    }

    return $campaignIds;
}
