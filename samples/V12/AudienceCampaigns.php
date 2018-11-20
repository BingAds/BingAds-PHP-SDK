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

//Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\CampaignType;
use Microsoft\BingAds\V12\CampaignManagement\AdGroup;
use Microsoft\BingAds\V12\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V12\CampaignManagement\ProfileCriterion;
use Microsoft\BingAds\V12\CampaignManagement\ProfileType;
use Microsoft\BingAds\V12\CampaignManagement\AgeCriterion;
use Microsoft\BingAds\V12\CampaignManagement\AgeRange;
use Microsoft\BingAds\V12\CampaignManagement\CallToAction;
use Microsoft\BingAds\V12\CampaignManagement\Ad;
use Microsoft\BingAds\V12\CampaignManagement\ResponsiveAd;
use Microsoft\BingAds\V12\CampaignManagement\Bid;
use Microsoft\BingAds\V12\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\Date;
use Microsoft\BingAds\V12\CampaignManagement\Setting;
use Microsoft\BingAds\V12\CampaignManagement\TargetSettingDetail;
use Microsoft\BingAds\V12\CampaignManagement\TargetSetting;
use Microsoft\BingAds\V12\CampaignManagement\CriterionTypeGroup;

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
    
// You'll need to add media before you can run this example. 
// For details, see ImageMedia.php

$landscapeImageMediaId = 0;
$landscapeLogoMediaId = 0;
$squareImageMediaId = 0;
$squareLogoMediaId = 0;

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());
                    
    // Setup an Audience campaign with one ad group and a responsive ad.
    
    $campaigns = array();   
    $campaign = new Campaign();
    // CampaignType must be set for Audience campaigns
    $campaign->CampaignType = CampaignType::Audience;
    // Languages must be set for Audience campaigns
    $campaign->Languages = array("All");
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Red shoes line.";
    $campaign->DailyBudget = 50;
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;
    
    // Specify one or more ad groups.

    $adGroups = array();

    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");

    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Red Shoe Sale";
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.09;
    // Language cannot be set for ad groups in Audience campaigns
    $adGroup->Language = null;
    // Network cannot be set for ad groups in Audience campaigns
    $adGroup->Network = null;
    
    // By including the corresponding TargetSettingDetail, 
    // this example sets the "target and bid" option for 
    // CompanyName, Industry, and JobFunction. We will only deliver ads to 
    // people who meet at least one of your criteria.
    // By default the "bid only" option is set for Audience, Age, and Gender.
    // We will deliver ads to all audiences, ages, and genders, if they meet
    // your company name, industry, or job function criteria.  
    $adGroupSettings = array();
    $adGroupTargetSetting = new TargetSetting();

    $adGroupCompanyNameTargetSettingDetail = new TargetSettingDetail();
    $adGroupCompanyNameTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::CompanyName;
    $adGroupCompanyNameTargetSettingDetail->TargetAndBid = True;

    $adGroupIndustryTargetSettingDetail = new TargetSettingDetail();
    $adGroupIndustryTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::Industry;
    $adGroupIndustryTargetSettingDetail->TargetAndBid = True;

    $adGroupJobFunctionTargetSettingDetail = new TargetSettingDetail();
    $adGroupJobFunctionTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::JobFunction;
    $adGroupJobFunctionTargetSettingDetail->TargetAndBid = True;

    $adGroupTargetSetting->Details = array();
    $adGroupTargetSetting->Details[] = $adGroupCompanyNameTargetSettingDetail;
    $adGroupTargetSetting->Details[] = $adGroupIndustryTargetSettingDetail;
    $adGroupTargetSetting->Details[] = $adGroupJobFunctionTargetSettingDetail;

    $encodedAdGroupTargetSetting = new SoapVar(
        $adGroupTargetSetting, 
        SOAP_ENC_OBJECT, 
        'TargetSetting', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupSettings[] = $encodedAdGroupTargetSetting;
    $adGroup->Settings=$adGroupSettings;
    
    $adGroups[] = $adGroup;

    $ads = array();

    $responsiveAd = new ResponsiveAd();
    $responsiveAd->TitlePart1 = "Contoso";
    // Not applicable for responsive ads
    $responsiveAd->AdFormatPreference = null;
    $responsiveAd->BusinessName = "Contoso";
    $responsiveAd->CallToAction = CallToAction::AddToCart;
    // Not applicable for responsive ads
    $responsiveAd->DevicePreference = null;
    $responsiveAd->EditorialStatus = null;
    $responsiveAd->FinalAppUrls = null;
    $responsiveAd->FinalMobileUrls = array("http://mobile.contoso.com/womenshoesale");
    $responsiveAd->FinalUrls = array("http://www.contoso.com/womenshoesale");
    $responsiveAd->ForwardCompatibilityMap = null;
    $responsiveAd->Headline = "Fast & Easy Setup";
    $responsiveAd->Id = null;
    $responsiveAd->LandscapeImageMediaId = $landscapeImageMediaId;
    $responsiveAd->LandscapeLogoMediaId = $landscapeLogoMediaId;
    $responsiveAd->LongHeadline = "Find New Customers & Increase Sales!";
    $responsiveAd->SquareImageMediaId = $squareImageMediaId;
    $responsiveAd->SquareLogoMediaId = $squareLogoMediaId;
    $responsiveAd->Status = null;
    $responsiveAd->Text = "Find New Customers & Increase Sales! Start Advertising on Contoso Today.";
    $responsiveAd->TrackingUrlTemplate = null;
    $responsiveAd->Type = null;
    $responsiveAd->UrlCustomParameters = null;  

    $ads[] = new SoapVar(
        $responsiveAd, 
        SOAP_ENC_OBJECT, 
        'ResponsiveAd', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // Add the campaign, ad group, and ad
    
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

	print "AddAds\n";
    $addAdsResponse = CampaignManagementExampleHelper::AddAds($nillableAdGroupIds->long[0], $ads);
    $nillableAdIds = $addAdsResponse->AdIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdIds);
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdsResponse->PartialErrors);
    }

    // Whether or not the "target and bid" option has been set for a given
    // criterion type group, you can set bid adjustments for specific criteria.

    $adGroupCriterions = array();
    $criterionBid = new BidMultiplier();
    $criterionBid->Multiplier = 20;
    $encodedCriterionBid = new SoapVar(
        $criterionBid, 
        SOAP_ENC_OBJECT, 
        'BidMultiplier', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // ProfileCriterion for CompanyName
    $adGroupCompanyNameCriterion = new BiddableAdGroupCriterion();
    $adGroupCompanyNameCriterion->AdGroupId = $nillableAdGroupIds->long[0];
    $adGroupCompanyNameCriterion->CriterionBid = $encodedCriterionBid;
    $companyNameCriterion = new ProfileCriterion();
    $companyNameCriterion->ProfileId = 808251207; // Microsoft
    $companyNameCriterion->ProfileType = ProfileType::CompanyName;
    $adGroupCompanyNameCriterion->Criterion = new SoapVar(
        $companyNameCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupCriterions[] = new SoapVar(
        $adGroupCompanyNameCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // ProfileCriterion for Industry
    $adGroupIndustryCriterion = new BiddableAdGroupCriterion();
    $adGroupIndustryCriterion->AdGroupId = $nillableAdGroupIds->long[0];
    $adGroupIndustryCriterion->CriterionBid = $encodedCriterionBid;
    $industryCriterion = new ProfileCriterion();
    $industryCriterion->ProfileId = 807658654; // Computer & Network Security
    $industryCriterion->ProfileType = ProfileType::Industry;
    $adGroupIndustryCriterion->Criterion = new SoapVar(
        $industryCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupCriterions[] = new SoapVar(
        $adGroupIndustryCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // ProfileCriterion for JobFunction
    $adGroupJobFunctionCriterion = new BiddableAdGroupCriterion();
    $adGroupJobFunctionCriterion->AdGroupId = $nillableAdGroupIds->long[0];
    $adGroupJobFunctionCriterion->CriterionBid = $encodedCriterionBid;
    $jobFunctionCriterion = new ProfileCriterion();
    $jobFunctionCriterion->ProfileId = 807658477; // Engineering
    $jobFunctionCriterion->ProfileType = ProfileType::JobFunction;
    $adGroupJobFunctionCriterion->Criterion = new SoapVar(
        $jobFunctionCriterion, 
        SOAP_ENC_OBJECT, 
        'ProfileCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupCriterions[] = new SoapVar(
        $adGroupJobFunctionCriterion, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // Exclude ages twenty-five through thirty-four.

    $adGroupNegativeAgeCriterion = new NegativeAdGroupCriterion();
    $adGroupNegativeAgeCriterion->AdGroupId = $nillableAdGroupIds->long[0];
    $ageCriterion = new AgeCriterion();
    $ageCriterion->AgeRange = AgeRange::TwentyFiveToThirtyFour;
    $adGroupNegativeAgeCriterion->Criterion = new SoapVar(
        $ageCriterion, 
        SOAP_ENC_OBJECT, 
        'AgeCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupCriterions[] = new SoapVar(
        $adGroupNegativeAgeCriterion, 
        SOAP_ENC_OBJECT, 
        'NegativeAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    print("Adding Ad Group Criteria . . . \n\n");
    CampaignManagementExampleHelper::OutputArrayOfAdGroupCriterion($adGroupCriterions);
    $addAdGroupCriterionsResponse =  CampaignManagementExampleHelper::AddAdGroupCriterions(
            $adGroupCriterions, 
            AdGroupCriterionType::Targets);
    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds;
    print("New Ad Group Criterion Ids:\n\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupCriterionIds);
    $adGroupCriterionErrors = $addAdGroupCriterionsResponse->NestedPartialErrors;
    print("\nAddAdGroupCriterions Errors:\n\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($adGroupCriterionErrors);

    // Delete the campaign, ad group, criteria, and ad that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($nillableCampaignIds->long[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds->long[0]);
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
