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
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\Keyword;
use Microsoft\BingAds\V13\CampaignManagement\Ad;
use Microsoft\BingAds\V13\CampaignManagement\AdType;
use Microsoft\BingAds\V13\CampaignManagement\ResponsiveSearchAd;
use Microsoft\BingAds\V13\CampaignManagement\AssetLink;
use Microsoft\BingAds\V13\CampaignManagement\ImageAsset;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\MatchType;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
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
                
    // Create a Search campaign with one ad group and a responsive search ad.
    
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
    
    // Add keywords and ads within the ad group.

    $keywords = array();
    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Broad;
    $keyword->Text = "Brand-A Shoes";
    $keywords[] = $keyword;

    print("-----\r\nAddKeywords:\r\n");
    $addKeywordsResponse = CampaignManagementExampleHelper::AddKeywords(
        $adGroupIds->long[0], 
        $keywords,
        null
    );
    print("KeywordIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addKeywordsResponse->KeywordIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addKeywordsResponse->PartialErrors);

    // The responsive search ad descriptions and headlines are stored as text assets. 
    // You must set between 2-4 descriptions and 3-15 headlines.
    
    $ads = array();
    $responsiveSearchAd = new ResponsiveSearchAd();
    $descriptionAssetLinks = array();
    $descriptionAssetLinkA = new AssetLink();
    $descriptionTextAssetA = new ImageAsset();
    $descriptionTextAssetA->Text = "Find New Customers & Increase Sales!";
    $descriptionAssetLinkA->Asset = new SoapVar(
        $descriptionTextAssetA, 
        SOAP_ENC_OBJECT, 
        'TextAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $descriptionAssetLinkA->PinnedField = "Description1";
    $descriptionAssetLinks[] = $descriptionAssetLinkA;
    $descriptionAssetLinkB = new AssetLink();
    $descriptionTextAssetB = new ImageAsset();
    $descriptionTextAssetB->Text = "Start Advertising on Contoso Today.";
    $descriptionAssetLinkB->Asset = new SoapVar(
        $descriptionTextAssetB, 
        SOAP_ENC_OBJECT, 
        'TextAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $descriptionAssetLinkB->PinnedField = "Description2";
    $descriptionAssetLinks[] = $descriptionAssetLinkB;
    $responsiveSearchAd->Descriptions = $descriptionAssetLinks;
    $headlineAssetLinks = array();
    $headlineAssetLinkA = new AssetLink();
    $headlineTextAssetA = new ImageAsset();
    $headlineTextAssetA->Text = "Contoso";
    $headlineAssetLinkA->Asset = new SoapVar(
        $headlineTextAssetA, 
        SOAP_ENC_OBJECT, 
        'TextAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $headlineAssetLinkA->PinnedField = "Headline1";
    $headlineAssetLinks[] = $headlineAssetLinkA;
    $headlineAssetLinkB = new AssetLink();
    $headlineTextAssetB = new ImageAsset();
    $headlineTextAssetB->Text = "Quick & Easy Setup";
    $headlineAssetLinkB->Asset = new SoapVar(
        $headlineTextAssetB, 
        SOAP_ENC_OBJECT, 
        'TextAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $headlineAssetLinkB->PinnedField = null;
    $headlineAssetLinks[] = $headlineAssetLinkB;
    $headlineAssetLinkC = new AssetLink();
    $headlineTextAssetC = new ImageAsset();
    $headlineTextAssetC->Text = "Seemless Integration";
    $headlineAssetLinkC->Asset = new SoapVar(
        $headlineTextAssetC, 
        SOAP_ENC_OBJECT, 
        'TextAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $headlineAssetLinkC->PinnedField = null;
    $headlineAssetLinks[] = $headlineAssetLinkC;
    $responsiveSearchAd->Headlines = $headlineAssetLinks;
    $responsiveSearchAd->Path1 = "seattle";
    $responsiveSearchAd->Path2 = "shoe sale";
    $responsiveSearchAd->FinalUrls = array("http://www.contoso.com/womenshoesale");
    $ads[] = new SoapVar(
        $responsiveSearchAd, 
        SOAP_ENC_OBJECT, 
        'ResponsiveSearchAd', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

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
