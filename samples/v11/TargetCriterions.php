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
use Microsoft\BingAds\v10\CampaignManagement\AddTargetsToLibraryRequest;
use Microsoft\BingAds\v10\CampaignManagement\SetTargetToAdGroupRequest;
use Microsoft\BingAds\v10\CampaignManagement\Target;
use Microsoft\BingAds\v10\CampaignManagement\DeviceOSTarget;
use Microsoft\BingAds\v10\CampaignManagement\DeviceOSTargetBid;

// Specify the Microsoft\BingAds\v11\CampaignManagement classes that will be used.
use Microsoft\BingAds\v11\CampaignManagement\Campaign;
use Microsoft\BingAds\v11\CampaignManagement\AdGroup;
use Microsoft\BingAds\v11\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\DeviceCriterion;
use Microsoft\BingAds\v11\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\v11\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterion;
use Microsoft\BingAds\v11\CampaignManagement\LocationCriterion;
use Microsoft\BingAds\v11\CampaignManagement\LocationIntentCriterion;
use Microsoft\BingAds\v11\CampaignManagement\IntentOption;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterionStatus;
use Microsoft\BingAds\v11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\v11\CampaignManagement\Bid;
use Microsoft\BingAds\v11\CampaignManagement\Date;

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
    $GLOBALS['CampaignProxyV10'] = new ServiceClient(ServiceClientType::CampaignManagementVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

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
        // criterions. Effectively the brand new campaign and ad group target all ages, days, hours, 
        // devices, genders, and locations. As a best practice you should consider at minimum 
        // adding a campaign location criterion corresponding to the customer market country.

        if(empty($campaignCriterions) || count($campaignCriterions) <= 0)
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

            // If the campaign used to shared target criterions with another campaign or ad group,
            // and the add operation resulted in new targer criterion identifiers for this campaign,
            // then we need to get the new criterion IDs.

            // Otherwise we only need to capture the new criterion IDs.

            if ($addCampaignCriterionsResponse->IsMigrated == true)
            {
                $campaignCriterions = CampaignManagementHelper::GetCampaignCriterionsByIds(
                    $campaignId,
                    null,
                    CampaignManagementHelper::AllTargetCampaignCriterionTypes)->CampaignCriterions;
            }
            else if (!empty($addCampaignCriterionsResponse->CampaignCriterionIds) && count($addCampaignCriterionsResponse->CampaignCriterionIds) > 0)
            {
                $criterionIds = $addCampaignCriterionsResponse->CampaignCriterionIds;
                for($index = 0; $index < count($criterionIds); $index++)
                {
                    $campaignCriterions->CampaignCriterion[$index]->Id = $criterionIds->long[$index] ?? null;
                }
            }
        }
        
        // You can now store or output the campaign criterions, whether or not they were 
        // migrated from a shared target library.

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
            
            if (!empty($updateAdGroupCriterions) && count($updateAdGroupCriterions) > 0)
            {
                $updateAdGroupCriterionsResponse = CampaignManagementHelper::UpdateAdGroupCriterions(
                    $updateAdGroupCriterions,
                    AdGroupCriterionType::Targets
                );

                // If the ad group used to shared target criterions with another campaign or ad group,
                // and the update operation resulted in new target criterion identifiers for this ad group,
                // then we need to get the new criterion IDs.

                if ($updateAdGroupCriterionsResponse->IsMigrated == true)
                {
                    $adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
                        $adGroupId,
                        null,
                        CampaignManagementHelper::AllTargetAdGroupCriterionTypes)->AdGroupCriterions;
                }
            }
            
            // You can now store or output the ad group criterions, whether or not they were 
            // migrated from a shared target library.

            print("Ad Group Criterions: \n\n");
            if(isset($adGroupCriterions->AdGroupCriterion))
            {
                CampaignManagementHelper::OutputAdGroupCriterions($adGroupCriterions->AdGroupCriterion);
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

    // This example uses the deprecated version 10 shared target library in order to later demonstrate
    // the inline migration from shared target criterions to unshared target criterions.

    $adGroupIds = array();
    foreach($nillableAdGroupIds as $adGroupId)
    {
        $adGroupIds[] = $adGroupId;
    }

    // The shared target ID is output within the ShareDeprecatedTargetsAsync method.
    // We won't do anything further with it in this example.

    $sharedTargetId = ShareDeprecatedTargets($adGroupIds);

    $campaignIds = array();
    foreach($nillableCampaignIds as $campaignId)
    {
        $campaignIds[] = $campaignId;
    }

    return $campaignIds;
}

// Shares a target with multiple new ad groups. This helper function is used to setup
// criterion migration scenarios.
// This is an example of a deprecated scenario. In Bing Ads API version 11 you can no longer use 
// the AddTargetsToLibrary, SetTargetToCampaign, or SetTargetToAdGroup operations. Instead you will 
// be required to use criterions. Support for targets will end no later than the sunset 
// of Bing Ads API version 10. 

function ShareDeprecatedTargets($adGroupIds)
{            
    $sharedTarget = new Target();
    $sharedTarget->Name = "My Target";

    $deviceOSTarget = new DeviceOSTarget();
    $deviceOSTargetBid = new DeviceOSTargetBid();
    $deviceOSTargetBid->BidAdjustment = 20;
    $deviceOSTargetBid->DeviceName = "Computers";
    $deviceOSTarget->Bids = array($deviceOSTargetBid);
    $sharedTarget->DeviceOS = $deviceOSTarget;

    $addTargetsToLibraryResponse = AddTargetsToLibrary(array($sharedTarget));
    $sharedTargetId = $addTargetsToLibraryResponse->TargetIds->long[0];
    printf("Added Target Id: %s\n", $sharedTargetId);

    SetTargetToAdGroup($adGroupIds[0], $sharedTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n", $adGroupIds[0], $sharedTargetId);
    SetTargetToAdGroup($adGroupIds[1], $sharedTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n", $adGroupIds[1], $sharedTargetId);
    SetTargetToAdGroup($adGroupIds[2], $sharedTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n\n", $adGroupIds[2], $sharedTargetId);
    
    return $sharedTargetId;
}


// Adds the specified Target object to the customer library. 

function AddTargetsToLibrary($targets)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxyV10']; 

    $request = new AddTargetsToLibraryRequest();
    $request->Targets = $targets;
    
    return $GLOBALS['CampaignProxyV10']->GetService()->AddTargetsToLibrary($request);
}

// Associates the specified ad group and target. 

function SetTargetToAdGroup($adGroupId, $targetId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxyV10']; 

    $request = new SetTargetToAdGroupRequest();
    $request->AdGroupId = $adGroupId;
    $request->TargetId = $targetId;
    
    $GLOBALS['CampaignProxyV10']->GetService()->SetTargetToAdGroup($request);
}

?>
