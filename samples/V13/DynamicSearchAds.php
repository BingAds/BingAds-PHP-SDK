<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/AdInsightExampleHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

//Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\DeviceCriterion;
use Microsoft\BingAds\V13\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\V13\CampaignManagement\NegativeCampaignCriterion;
use Microsoft\BingAds\V13\CampaignManagement\CampaignCriterion;
use Microsoft\BingAds\V13\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\CampaignCriterionStatus;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\DynamicSearchAd;
use Microsoft\BingAds\V13\CampaignManagement\DynamicSearchAdsSetting;
use Microsoft\BingAds\V13\CampaignManagement\WebpageConditionOperand;
use Microsoft\BingAds\V13\CampaignManagement\WebpageCondition;
use Microsoft\BingAds\V13\CampaignManagement\WebpageParameter;
use Microsoft\BingAds\V13\CampaignManagement\Webpage;
use Microsoft\BingAds\V13\CampaignManagement\FixedBid;
use Microsoft\BingAds\V13\CampaignManagement\CustomParameter;
use Microsoft\BingAds\V13\CampaignManagement\CustomParameters;
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\BatchErrorCollection;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\AdInsightExampleHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

const DomainName = "contoso.com";
const Language = "EN";

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // To get started with dynamic search ads, first you'll need to add a new Search campaign 
    // Include a DynamicSearchAdsSetting that specifies the target website domain and language.
        
    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->CampaignType = CampaignType::Search;
    $campaign->DailyBudget = 50.00;
    $campaign->Languages = array("All");    
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $settings = array();
    $dynamicSearchSetting = new DynamicSearchAdsSetting();
    $dynamicSearchSetting->DomainName = "contoso.com";
    $dynamicSearchSetting->Language = "English";
    $encodedSetting = new SoapVar(
        $dynamicSearchSetting, 
        SOAP_ENC_OBJECT, 
        'DynamicSearchAdsSetting', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $settings[] = $encodedSetting;
    $campaign->Settings = $settings;
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
    
    // Create a new ad group with type set to "SearchDynamic"

    $adGroups = array();
    $adGroup = new AdGroup();
    $adGroup->AdGroupType = "SearchDynamic";    
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

    // You can add one or more Webpage criteria to each ad group that helps determine 
    // whether or not to serve dynamic search ads.

    $adGroupCriterions = array();

    $adGroupWebpagePositivePageContent = new BiddableAdGroupCriterion();
    $adGroupWebpagePositivePageContent->Type = "BiddableAdGroupCriterion";
    $adGroupWebpagePositivePageContent->AdGroupId = $adGroupIds->long[0];
    $webpageConditionsAGWPPC = array();
	$conditionAGWPPC = new WebpageCondition();
	$conditionAGWPPC->Argument = "flowers";
	$conditionAGWPPC->Operand = WebpageConditionOperand::PageContent;
	$webpageConditionsAGWPPC[] = $conditionAGWPPC;
    $webpageParameterAGWPPC = new WebpageParameter();
    $webpageParameterAGWPPC->Conditions = $webpageConditionsAGWPPC;
    $webpageParameterAGWPPC->CriterionName = "Ad Group Webpage Positive Page Content Criterion";                
    $criterionAGWPPC = new Webpage();
    $criterionAGWPPC->Type = "Webpage";
    $criterionAGWPPC->Parameter = $webpageParameterAGWPPC;
    $adGroupWebpagePositivePageContent->Criterion = new SoapVar(
        $criterionAGWPPC, 
        SOAP_ENC_OBJECT, 
        'Webpage', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );    
    $criterionBidAGWPPC = new FixedBid();
    $criterionBidAGWPPC->Amount = 0.50;
    $adGroupWebpagePositivePageContent->CriterionBid = new SoapVar(
        $criterionBidAGWPPC, 
        SOAP_ENC_OBJECT, 
        'FixedBid', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    
    $adGroupCriterions[] = new SoapVar(
        $adGroupWebpagePositivePageContent, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    // To discover the categories that you can use for Webpage criteria (positive or negative), 
    // use the GetDomainCategories operation with the Ad Insight service.
    
    print("-----\r\nGetDomainCategories:\r\n");
    $getDomainCategoriesResponse = AdInsightExampleHelper::GetDomainCategories(
        null, 
        DomainName, 
        Language
    );
    $categories = $getDomainCategoriesResponse->Categories;
    print("Categories:\r\n");
    AdInsightExampleHelper::OutputArrayOfDomainCategory($categories);

    // If any categories are available let's use one as a condition.
    if (!empty($categories) && count((array)$categories) > 0)
    {
        $adGroupWebpagePositiveCategory = new BiddableAdGroupCriterion();
        $adGroupWebpagePositiveCategory->Type = "BiddableAdGroupCriterion";
        $adGroupWebpagePositiveCategory->AdGroupId = $adGroupIds->long[0];
        $webpageConditionsAGWPC = array();
        $conditionAGWPC = new WebpageCondition();
        $conditionAGWPC->Argument = $categories->DomainCategory[0]->CategoryName;
        $conditionAGWPC->Operand = WebpageConditionOperand::Category;
        $webpageConditionsAGWPC[] = $conditionAGWPC;
        $webpageParameterAGWPC = new WebpageParameter();
        $webpageParameterAGWPC->Conditions = $webpageConditionsAGWPC;
        $webpageParameterAGWPC->CriterionName = "Ad Group Webpage Positive Category Criterion";                    
        $criterionAGWPC = new Webpage();
        $criterionAGWPC->Type = "Webpage";
        $criterionAGWPC->Parameter = $webpageParameterAGWPC;
        $adGroupWebpagePositiveCategory->Criterion = new SoapVar(
            $criterionAGWPC, 
            SOAP_ENC_OBJECT, 
            'Webpage', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );    
        $criterionBidAGWPC = new FixedBid();
        $criterionBidAGWPC->Amount = 0.50;
        $adGroupWebpagePositiveCategory->CriterionBid = new SoapVar(
            $criterionBidAGWPC, 
            SOAP_ENC_OBJECT, 
            'FixedBid', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );
        
        $adGroupCriterions[] = new SoapVar(
            $adGroupWebpagePositiveCategory, 
            SOAP_ENC_OBJECT, 
            'BiddableAdGroupCriterion', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );
    }

    // If you want to exclude certain portions of your website, you can add negative Webpage 
    // criterion at the campaign and ad group level. 

    $adGroupWebpageNegativeUrl = new NegativeAdGroupCriterion();
    $adGroupWebpageNegativeUrl->Type = "NegativeAdGroupCriterion";
    $adGroupWebpageNegativeUrl->AdGroupId = $adGroupIds->long[0];
    // You can choose whether you want the criterion argument to match partial URLs, 
    // page content, page title, or categories that Bing thinks applies to your website.
    $webpageConditionsAGWNU = array();
    $conditionAGWNU = new WebpageCondition();
    $conditionAGWNU->Argument = DomainName;
    $conditionAGWNU->Operand = WebpageConditionOperand::Url;
    $webpageConditionsAGWNU[] = $conditionAGWNU;
    $webpageParameterAGWNU = new WebpageParameter();
    $webpageParameterAGWNU->Conditions = $webpageConditionsAGWNU;
    // If you do not specify any name, then it will be set to a concatenated list of conditions. 
    $webpageParameterAGWNU->CriterionName = null;                
    $criterionAGWNU = new Webpage();
    $criterionAGWNU->Type = "Webpage";
    $criterionAGWNU->Parameter = $webpageParameterAGWNU;
    $adGroupWebpageNegativeUrl->Criterion = new SoapVar(
        $criterionAGWNU, SOAP_ENC_OBJECT, 
        'Webpage', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    
    $adGroupCriterions[] = new SoapVar(
        $adGroupWebpageNegativeUrl, 
        SOAP_ENC_OBJECT, 
        'BiddableAdGroupCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    print("-----\r\nAddAdGroupCriterions:\r\n");
    $addAdGroupCriterionsResponse = CampaignManagementExampleHelper::AddAdGroupCriterions(
        $adGroupCriterions, 
        AdGroupCriterionType::Webpage
    );
    print("AdGroupCriterionIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addAdGroupCriterionsResponse->AdGroupCriterionIds);
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addAdGroupCriterionsResponse->NestedPartialErrors);

    // The negative Webpage criterion at the campaign level applies to all ad groups 
    // within the campaign; however, if you define ad group level negative Webpage criterion, 
    // the campaign criterion is ignored for that ad group.

    $campaignCriterions = array();

    $campaignWebpageNegativeUrl = new NegativeCampaignCriterion();
    $campaignWebpageNegativeUrl->Type = "NegativeCampaignCriterion";
    $campaignWebpageNegativeUrl->CampaignId = $campaignIds->long[0];
    $webpageConditionsCWNU = array();
    $conditionCWNU = new WebpageCondition();
    $conditionCWNU->Argument = DomainName . "\\seattle";
    $conditionCWNU->Operand = WebpageConditionOperand::Url;
    $webpageConditionsCWNU[] = $conditionCWNU;
    $webpageParameterCWNU = new WebpageParameter();
    $webpageParameterCWNU->Conditions = $webpageConditionsCWNU;
    $webpageParameterCWNU->CriterionName = "Campaign Negative Webpage Url Criterion";                
    $criterionCWNU = new Webpage();
    $criterionCWNU->Type = "Webpage";
    $criterionCWNU->Parameter = $webpageParameterCWNU;
    $campaignWebpageNegativeUrl->Criterion = new SoapVar(
        $criterionCWNU, 
        SOAP_ENC_OBJECT, 
        'Webpage', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    $campaignCriterions[] = new SoapVar(
        $campaignWebpageNegativeUrl, 
        SOAP_ENC_OBJECT, 
        'NegativeCampaignCriterion', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    
    print("-----\r\nAddCampaignCriterions:\r\n");
    $addCampaignCriterionsResponse = CampaignManagementExampleHelper::AddCampaignCriterions(
        $campaignCriterions, 
        CampaignCriterionType::Webpage
    );
    print("CampaignCriterionIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addCampaignCriterionsResponse->CampaignCriterionIds);
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addCampaignCriterionsResponse->NestedPartialErrors);

    // Finally you must add at least one DynamicSearchAd into the ad group. The ad title and display URL 
    // are generated automatically based on the website domain and language that you want to target.

    $ads = array();
    $ad = new DynamicSearchAd();
    $ad->Text = "Find New Customers & Increase Sales! Start Advertising on Contoso Today.";
    $ad->Path1 = "seattle";
    $ad->Path2 = "shoe sale";
    // You cannot set FinalUrls for dynamic search ads. 
    // The Final URL will be a dynamically selected landing page.
    // The final URL is distinct from the path that customers will see and click on in your ad.
    $ad->FinalUrls = null;
    $encodedAd = new SoapVar(
        $ad, 
        SOAP_ENC_OBJECT, 
        'DynamicSearchAd', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $ads[] = $encodedAd;
    
	print("-----\r\nAddAds:\r\n");
    $addAdsResponse = CampaignManagementExampleHelper::AddAds(
        $adGroupIds->long[0], 
        $ads
    );
    print("AdIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addAdsResponse->AdIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdsResponse->PartialErrors);

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
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
