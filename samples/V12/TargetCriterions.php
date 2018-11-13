<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\AdGroup;
use Microsoft\BingAds\V12\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\DeviceCriterion;
use Microsoft\BingAds\V12\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\V12\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\V12\CampaignManagement\CampaignCriterion;
use Microsoft\BingAds\V12\CampaignManagement\LocationCriterion;
use Microsoft\BingAds\V12\CampaignManagement\LocationIntentCriterion;
use Microsoft\BingAds\V12\CampaignManagement\IntentOption;
use Microsoft\BingAds\V12\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V12\CampaignManagement\CampaignCriterionStatus;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\Bid;
use Microsoft\BingAds\V12\CampaignManagement\Date;
use Microsoft\BingAds\V12\CampaignManagement\CampaignAdditionalField;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $campaignIds = GetExampleCampaignIds();
    
    // You can set campaignIds null to get all campaigns in the account, instead of 
    // adding and retrieving the example campaigns.

    $getCampaigns = CampaignManagementExampleHelper::GetCampaignsByIds(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaignIds, 
        AuthHelper::CampaignTypes,
        CampaignAdditionalField::ExperimentId
        )->Campaigns;
    
    // Loop through all campaigns and ad groups to get the target criterion IDs.

    foreach ($getCampaigns->Campaign as $campaign)
    {
        $campaignId = $campaign->Id;

        // Set campaignCriterionIds null to get all criterions 
        // (of the specified target criterion type or types) for the current campaign.
        
        $campaignCriterions = CampaignManagementExampleHelper::GetCampaignCriterionsByIds(
            null,
            $campaignId,
            AuthHelper::AllTargetCampaignCriterionTypes)->CampaignCriterions;

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
            $encodedLocationCriterion = new SoapVar(
                $locationCriterion, 
                SOAP_ENC_OBJECT, 
                'LocationCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            $locationBiddableCampaignCriterion->Criterion = $encodedLocationCriterion;
            $bidMultiplier = new BidMultiplier();
            $bidMultiplier->Multiplier = 0;
            $encodedBidMultiplier = new SoapVar(
                $bidMultiplier, 
                SOAP_ENC_OBJECT, 
                'BidMultiplier', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            $locationBiddableCampaignCriterion->CriterionBid = $encodedBidMultiplier;

            $encodedCriterion = new SoapVar(
                $locationBiddableCampaignCriterion, 
                SOAP_ENC_OBJECT, 
                'BiddableCampaignCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            $campaignCriterions[] = $encodedCriterion;

            $locationIntentBiddableCampaignCriterion = new BiddableCampaignCriterion();
            $locationIntentBiddableCampaignCriterion->CampaignId = $campaignId;
            $locationIntentCriterion = new LocationIntentCriterion();
            $locationIntentCriterion->IntentOption = IntentOption::PeopleInOrSearchingForOrViewingPages;
            $encodedLocationIntentCriterion = new SoapVar(
                $locationIntentCriterion, 
                SOAP_ENC_OBJECT, 
                'LocationIntentCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            $locationIntentBiddableCampaignCriterion->Criterion = $encodedLocationIntentCriterion;

            $encodedCriterion = new SoapVar(
                $locationIntentBiddableCampaignCriterion, 
                SOAP_ENC_OBJECT, 
                'BiddableCampaignCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            $campaignCriterions[] = $encodedCriterion;

            $addCampaignCriterionsResponse = CampaignManagementExampleHelper::AddCampaignCriterions(
                $campaignCriterions,
                CampaignCriterionType::Targets
            );

            // Capture the new criterion IDs either via AddCampaignCriterionsResponse or you can call GetCampaignCriterionsByIds.

            $campaignCriterions = CampaignManagementExampleHelper::GetCampaignCriterionsByIds(
                null,
                $campaignId,
                AuthHelper::AllTargetCampaignCriterionTypes)->CampaignCriterions;
        }
        
        // You can now store or output the campaign criterions.

        print("Campaign Criterions: \n\n");
        if(isset($campaignCriterions->CampaignCriterion)){
            CampaignManagementExampleHelper::OutputArrayOfCampaignCriterion($campaignCriterions);
        }        

        $getAdGroups = CampaignManagementExampleHelper::GetAdGroupsByCampaignId($campaignId)->AdGroups;

        // Loop through all ad groups to get the target criterion IDs.
        foreach ($getAdGroups->AdGroup as $adGroup)
        {
            $adGroupId = $adGroup->Id;

            // Set adGroupCriterionIds null to get all criterions 
            // (of the specified target criterion type or types) for the current ad group.
            $adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
                null,
                $adGroupId,
                AuthHelper::AllTargetAdGroupCriterionTypes)->AdGroupCriterions;

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
                        $updateAdGroupCriterion->Criterion = new SoapVar(
                            $deviceCriterion, 
                            SOAP_ENC_OBJECT, 
                            'DeviceCriterion', 
                            $GLOBALS['CampaignManagementProxy']->GetNamespace());
                        $criterionBid = new BidMultiplier();
                        $criterionBid->Multiplier = $adGroupCriterion->CriterionBid->Multiplier * 1.05;
                        $updateAdGroupCriterion->CriterionBid = new SoapVar(
                            $criterionBid, SOAP_ENC_OBJECT, 
                            'BidMultiplier', 
                            $GLOBALS['CampaignManagementProxy']->GetNamespace());

                        $updateAdGroupCriterions[] = new SoapVar(
                            $updateAdGroupCriterion, 
                            SOAP_ENC_OBJECT, 
                            'BiddableAdGroupCriterion', 
                            $GLOBALS['CampaignManagementProxy']->GetNamespace());
                    }
                }
                
                $updateAdGroupCriterionsResponse = CampaignManagementExampleHelper::UpdateAdGroupCriterions(
                    $updateAdGroupCriterions,
                    AdGroupCriterionType::Targets
                );

                $adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
                    null,
                    $adGroupId,
                    AuthHelper::AllTargetAdGroupCriterionTypes)->AdGroupCriterions;
                
                // You can now store or output the ad group criterions.

                print("Ad Group Criterions: \n\n");
                if(isset($adGroupCriterions->AdGroupCriterion))
                {
                    CampaignManagementExampleHelper::OutputArrayOfAdGroupCriterion($adGroupCriterions);
                }
            }
        }
    }

    // Delete the campaign and ad group that were previously added. 

    CampaignManagementExampleHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("\nDeleted CampaignId %d\n\n", $campaignIds[0]);
}
catch (SoapFault $e)
{
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
    }
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputEditorialApiFaultDetail($e->detail->EditorialApiFaultDetail);
    }
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
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
        $adGroup->StartDate = null;
        $endDate = new Date();
        $endDate->Day = 31;
        $endDate->Month = 12;
        $endDate->Year = date("Y");
        $adGroup->EndDate = $endDate;
        $adGroup->CpcBid = new Bid();
        $adGroup->CpcBid->Amount = 0.09;
        $adGroup->Language = "English";
        $adGroups[] = $adGroup;
    }

    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns,
        false);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);
    }

    print "AddAdGroups\n";
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $nillableCampaignIds->long[0], 
        $adGroups, 
        null);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);
    }

    $campaignIds = array();
    foreach($nillableCampaignIds->long as $campaignId)
    {
        $campaignIds[] = $campaignId;
    }

    return $campaignIds;
}
