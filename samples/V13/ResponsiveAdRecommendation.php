<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

//require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

//Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\CallToAction;
use Microsoft\BingAds\V13\CampaignManagement\LanguageName;
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\ResponsiveAd;
use Microsoft\BingAds\V13\CampaignManagement\ImageAsset;
use Microsoft\BingAds\V13\CampaignManagement\TextAsset;

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

    // To run this example you'll need to provide a valid Ad Final URL
    $adFinalUrl = "https://contoso.com";
    // Set false to disable cleanup of created entities at the end
    $doCleanup = true;

    print("-----\r\nCreateResponsiveAdRecommendation:\r\n");
    printf("-----\r\nGetting ad recommendation for URL %s ...\r\n", $adFinalUrl);
    $finalUrls = array($adFinalUrl);
    $responsiveAdRecommendationResponse = CampaignManagementExampleHelper::CreateResponsiveAdRecommendation(
        $finalUrls
    );
    $responsiveAd = $responsiveAdRecommendationResponse->ResponsiveAd;
    $newResponsiveAd = new ResponsiveAd();
    $newResponsiveAd->DevicePreference = $responsiveAd->DevicePreference;
    $newResponsiveAd->FinalUrls = $responsiveAd->FinalUrls;
    $newResponsiveAd->ForwardCompatibilityMap = $responsiveAd->ForwardCompatibilityMap;
    $newResponsiveAd->Headlines = $responsiveAd->Headlines;
    $newResponsiveAd->LongHeadlines = $responsiveAd->LongHeadlines;
    $newResponsiveAd->Descriptions = $responsiveAd->Descriptions;
    $newResponsiveAd->CallToAction = $responsiveAd->CallToAction;
    copyAssetLinks($newResponsiveAd->Headlines);
    copyAssetLinks($newResponsiveAd->LongHeadlines);
    copyAssetLinks($newResponsiveAd->Descriptions);
    $imageSuggestions = $responsiveAdRecommendationResponse->ImageSuggestions->AdRecommendationImageSuggestion;

    // Select a few images from the suggested list. This example picks first 5 images
    $selectedImages = array_slice($imageSuggestions, 0, 5);

    // Add selected images to your media library
    saveImages($selectedImages);

    $images = array_map(function($x) {
        return $x->AssetLink;
    }, $selectedImages);
    $newResponsiveAd->Images = $images;
    
    $newResponsiveAd->BusinessName = "Contoso";
    $newResponsiveAd->CallToActionLanguage = LanguageName::English;

    // Create an Audience campaign with one ad group and a responsive ad
    $campaigns = array();   
    $campaign = new Campaign();
    // CampaignType must be set for Audience campaigns
    $campaign->CampaignType = CampaignType::Audience;    
    $campaign->Name = "Ad recommendation test " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    // Languages must be set for Audience campaigns
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
    $adGroup->Name = "Holiday Sale";    
    $adGroup->StartDate = null;
    // Network cannot be set for ad groups in Audience campaigns
    $adGroup->Network = null;    
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

    // Add a responsive ad within the ad group.
    $ads = array();
    $ads[] = new SoapVar(
        $newResponsiveAd, 
        SOAP_ENC_OBJECT, 
        'ResponsiveAd', 
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

    if (!$doCleanup) {
        return;
    }
    else {
        // Delete the account's media.
        print("-----\r\nDeleteMedia:\r\n");
        $mediaIds = array_map(function($x) {
            return $x->Asset->enc_value->Id;
        }, $newResponsiveAd->Images);
        CampaignManagementExampleHelper::DeleteMedia(
            $GLOBALS['AuthorizationData']->AccountId, 
            $mediaIds
        );
    
        foreach ($mediaIds as $id)
        {
            printf("Deleted Media Id %s\r\n", $id);
        }

        // Delete the campaign and everything it contains e.g., ad groups and ads.

        print("-----\r\nDeleteCampaigns:\r\n");
        CampaignManagementExampleHelper::DeleteCampaigns(
            $GLOBALS['AuthorizationData']->AccountId, 
            array($campaignIds->long[0])
        );
        printf("Deleted CampaignId %s\r\n", $campaignIds->long[0]);
    }
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

function copyAssetLinks($assetLinks) {
    for ($i = 0; $i < count($assetLinks->AssetLink); $i++) {
        $textAsset = new TextAsset();
        foreach ($assetLinks->AssetLink[$i]->Asset as $key => $value) {
            $textAsset->$key = $value;
        }
        $assetLinks->AssetLink[$i]->Asset = new SoapVar(
            $textAsset, 
            SOAP_ENC_OBJECT, 
            'TextAsset', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );
    }
}

function saveImages($imageSuggestions) {
    $mediaToAdd = array(); 

    foreach ($imageSuggestions as $imageSuggestion) {
        $image = $imageSuggestion->Image;
        
        $imageBytes = downloadBytes($imageSuggestion->ImageUrl);
        $imageBase64 = base64_encode($imageBytes);
        
        $image->Data = $imageBase64;

        $encodedImage = new SoapVar(
            $image, 
            SOAP_ENC_OBJECT, 
            'Image', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );
        
        $mediaToAdd[] = $encodedImage;
    }

    $addMediaResponse = CampaignManagementExampleHelper::AddMedia(
        $GLOBALS['AuthorizationData']->AccountId, 
        $mediaToAdd
    );
    $mediaIds = $addMediaResponse->MediaIds;

    for ($i = 0; $i < count($mediaIds->long); $i++) {
        $imageSuggestions[$i]->AssetLink->Asset->Id = $mediaIds->long[$i];
        $imageAsset = new ImageAsset();
        foreach ($imageSuggestions[$i]->AssetLink->Asset as $key => $value) {
            $imageAsset->$key = $value;
        }
        $imageSuggestions[$i]->AssetLink->Asset = new SoapVar(
            $imageAsset, 
            SOAP_ENC_OBJECT, 
            'ImageAsset', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace()
        );
    }
}

function downloadBytes($url) {
    $outputStream = fopen('php://temp', 'r+');
    $buffer = '';
    $bufferSize = 4096;

    $inputStream = fopen($url, 'rb');
    if ($inputStream === false) {
        throw new Exception("Unable to open URL: $url");
    }

    try {
        while (!feof($inputStream)) {
            $buffer = fread($inputStream, $bufferSize);
            if ($buffer === false) {
                throw new Exception("Error reading from URL: $url");
            }
            fwrite($outputStream, $buffer);
        }

        rewind($outputStream);
        $result = stream_get_contents($outputStream);
        if ($result === false) {
            throw new Exception("Error reading from temporary stream");
        }

        return $result;
    } finally {
        fclose($inputStream);
        fclose($outputStream);
    }
}
