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

//Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\ProfileCriterion;
use Microsoft\BingAds\V13\CampaignManagement\ProfileType;
use Microsoft\BingAds\V13\CampaignManagement\AgeCriterion;
use Microsoft\BingAds\V13\CampaignManagement\AgeRange;
use Microsoft\BingAds\V13\CampaignManagement\CallToAction;
use Microsoft\BingAds\V13\CampaignManagement\Ad;
use Microsoft\BingAds\V13\CampaignManagement\ResponsiveAd;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\Setting;
use Microsoft\BingAds\V13\CampaignManagement\TargetSettingDetail;
use Microsoft\BingAds\V13\CampaignManagement\TargetSetting;
use Microsoft\BingAds\V13\CampaignManagement\CriterionTypeGroup;

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
                    
    // Create an Audience campaign with one ad group.

    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    // CampaignType must be set for Audience campaigns
    $campaign->CampaignType = CampaignType::Audience;
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
    // Sets the "target and bid" option for CompanyName, Industry, and JobFunction. 
    // Microsoft will only deliver ads to people who meet at least one of your criteria.
    // By default the "bid only" option is set for Audience, Age, and Gender.
    // Microsoft will deliver ads to all audiences, ages, and genders, if they meet
    // your company name, industry, or job function criteria.
    $adGroupSettings = array();
    $adGroupTargetSetting = new TargetSetting();
    $adGroupTargetSetting->Details = array();
    $adGroupCompanyNameTargetSettingDetail = new TargetSettingDetail();
    $adGroupCompanyNameTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::CompanyName;
    $adGroupCompanyNameTargetSettingDetail->TargetAndBid = True;
    $adGroupTargetSetting->Details[] = $adGroupCompanyNameTargetSettingDetail;
    $adGroupIndustryTargetSettingDetail = new TargetSettingDetail();
    $adGroupIndustryTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::Industry;
    $adGroupIndustryTargetSettingDetail->TargetAndBid = True;
    $adGroupTargetSetting->Details[] = $adGroupIndustryTargetSettingDetail;
    $adGroupJobFunctionTargetSettingDetail = new TargetSettingDetail();
    $adGroupJobFunctionTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::JobFunction;
    $adGroupJobFunctionTargetSettingDetail->TargetAndBid = True;
    $adGroupTargetSetting->Details[] = $adGroupJobFunctionTargetSettingDetail;
    $encodedAdGroupTargetSetting = new SoapVar(
        $adGroupTargetSetting, 
        SOAP_ENC_OBJECT, 
        'TargetSetting', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupSettings[] = $encodedAdGroupTargetSetting;
    $adGroup->Settings=$adGroupSettings;   
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

    // Whether or not the "target and bid" option has been set for a given
    // criterion type group, you can set bid adjustments for specific criteria.

    $adGroupCriterions = array();
    $criterionBid = new BidMultiplier();
    $criterionBid->Multiplier = 20;
    $encodedCriterionBid = new SoapVar(
        $criterionBid, 
        SOAP_ENC_OBJECT, 
        'BidMultiplier', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    // ProfileCriterion for CompanyName
    $adGroupCompanyNameCriterion = new BiddableAdGroupCriterion();
    $adGroupCompanyNameCriterion->AdGroupId = $adGroupIds->long[0];
    $adGroupCompanyNameCriterion->CriterionBid = $encodedCriterionBid;
    $companyNameCriterion = new ProfileCriterion();
    $companyNameCriterion->ProfileId = 808251207; // Microsoft
    $companyNameCriterion->ProfileType = ProfileType::CompanyName;
    $adGroupCompanyNameCriterion->Criterion = new SoapVar(
        $companyNameCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupCriterions[] = new SoapVar(
        $adGroupCompanyNameCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    // ProfileCriterion for Industry
    $adGroupIndustryCriterion = new BiddableAdGroupCriterion();
    $adGroupIndustryCriterion->AdGroupId = $adGroupIds->long[0];
    $adGroupIndustryCriterion->CriterionBid = $encodedCriterionBid;
    $industryCriterion = new ProfileCriterion();
    $industryCriterion->ProfileId = 807658654; // Computer & Network Security
    $industryCriterion->ProfileType = ProfileType::Industry;
    $adGroupIndustryCriterion->Criterion = new SoapVar(
        $industryCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupCriterions[] = new SoapVar(
        $adGroupIndustryCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    // ProfileCriterion for JobFunction
    $adGroupJobFunctionCriterion = new BiddableAdGroupCriterion();
    $adGroupJobFunctionCriterion->AdGroupId = $adGroupIds->long[0];
    $adGroupJobFunctionCriterion->CriterionBid = $encodedCriterionBid;
    $jobFunctionCriterion = new ProfileCriterion();
    $jobFunctionCriterion->ProfileId = 807658477; // Engineering
    $jobFunctionCriterion->ProfileType = ProfileType::JobFunction;
    $adGroupJobFunctionCriterion->Criterion = new SoapVar(
        $jobFunctionCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupCriterions[] = new SoapVar(
        $adGroupJobFunctionCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    // Exclude ages twenty-five through thirty-four.

    $adGroupNegativeAgeCriterion = new NegativeAdGroupCriterion();
    $adGroupNegativeAgeCriterion->AdGroupId = $adGroupIds->long[0];
    $ageCriterion = new AgeCriterion();
    $ageCriterion->AgeRange = AgeRange::TwentyFiveToThirtyFour;
    $adGroupNegativeAgeCriterion->Criterion = new SoapVar(
        $ageCriterion, 
        SOAP_ENC_OBJECT, 
        'AgeCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adGroupCriterions[] = new SoapVar(
        $adGroupNegativeAgeCriterion, 
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
    printf("Deleted Campaign Id %s\r\n", $campaignIds->long[0]);
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
        print $e->getCode()." ".$e->getMessage()."\r\n";
        print $e->getTraceAsString()."\r\n";
    }
}
