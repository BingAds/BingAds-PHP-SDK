<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\V13\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\LocationCriterion;
use Microsoft\BingAds\V13\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\Date;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Setup a campaign with one ad group.

    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->Languages = array("All");
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;
    
    print("-----\r\nAddCampaigns:\r\n");
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns
    );
    $campaignIds = $addCampaignsResponse->CampaignIds;
    print("CampaignIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($campaignIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);

    // Add an ad group within the campaign.

    $adGroups = array();
    $adGroup = new AdGroup();
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.09;
    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");
    $adGroup->EndDate = $endDate;
    $adGroup->Name = "Women's Red Shoe Sale";    
    $adGroup->StartDate = null;    
    $adGroups[] = $adGroup;
 
    print("-----\r\nAddAdGroups:\r\n");
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $campaignIds->long[0], 
        $adGroups,
        null
    );
    $adGroupIds = $addAdGroupsResponse->AdGroupIds;
    print("AdGroupIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);
    
    // When you first create a campaign or ad group using the Bing Ads API, it will not have any 
    // target criteria. Effectively, the brand new campaign and ad group target all ages, days, hours, 
    // devices, genders, and locations. As a best practice, you should consider at a minimum 
    // adding a campaign location criterion corresponding to the customer market country.

    $campaignCriterions = array();
    $campaignLocationCriterion = new BiddableCampaignCriterion();
    $campaignLocationCriterion->CampaignId = $campaignIds->long[0];
    $locationCriterion = new LocationCriterion();
    // United States
    $locationCriterion->LocationId = 190;
    $campaignLocationCriterion->Criterion = new SoapVar(
        $locationCriterion, 
        SOAP_ENC_OBJECT, 
        'LocationCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $bidMultiplier = new BidMultiplier();
    $bidMultiplier->Multiplier = 0;
    $campaignLocationCriterion->CriterionBid = new SoapVar(
        $bidMultiplier, 
        SOAP_ENC_OBJECT, 
        'BidMultiplier', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $campaignCriterions[] = new SoapVar(
        $campaignLocationCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableCampaignCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    print("-----\r\nAddCampaignCriterions:\r\n");
    $addCampaignCriterionsResponse = CampaignManagementExampleHelper::AddCampaignCriterions(
        $campaignCriterions, 
        CampaignCriterionType::Targets
    );
    print("CampaignCriterionIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addCampaignCriterionsResponse->CampaignCriterionIds);
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addCampaignCriterionsResponse->NestedPartialErrors);

    // A negative location criterion is an excluded location.
    // Ads in this ad group will not be shown to people in Redmond, WA.

    $adGroupCriterions = array();
    $adGroupNegativeLocationCriterion = new NegativeAdGroupCriterion();
    $adGroupNegativeLocationCriterion->AdGroupId = $adGroupIds->long[0];
    $locationCriterion = new LocationCriterion();
    // Redmond|Washington|United States
    $locationCriterion->LocationId = 67555;
    $adGroupNegativeLocationCriterion->Criterion = new SoapVar(
        $locationCriterion, 
        SOAP_ENC_OBJECT, 
        'LocationCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupCriterions[] = new SoapVar(
        $adGroupNegativeLocationCriterion, 
        SOAP_ENC_OBJECT, 
        'NegativeAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    print("-----\r\nAddAdGroupCriterions:\r\n");
    $addAdGroupCriterionsResponse =  CampaignManagementExampleHelper::AddAdGroupCriterions(
        $adGroupCriterions, 
        AdGroupCriterionType::Targets
    );
    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds;
    print("AdGroupCriterionIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupCriterionIds);
    $adGroupCriterionErrors = $addAdGroupCriterionsResponse->NestedPartialErrors;
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($adGroupCriterionErrors);

    // Delete the campaign and everything it contains e.g., ad groups and ads.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($campaignIds->long[0])
    );
    printf("Deleted CampaignId %s\r\n", $campaignIds->long[0]);
}
catch (SoapFault $e)
{
	printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
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
