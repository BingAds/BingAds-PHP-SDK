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
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\Image;
use Microsoft\BingAds\V13\CampaignManagement\AssetLink;
use Microsoft\BingAds\V13\CampaignManagement\ImageAsset;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;
    
// To run this example you'll need to provide your own image.  
// For required aspect ratios and recommended dimensions please see 
// Image remarks at https://go.microsoft.com/fwlink/?linkid=872754.

$mediaFilePath = "c:\\dev\\media\\";
$responsiveAdMediaFileName = "imageresponsivead1200x628.png";

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Add an image to your media library. 
    // The image asset is needed later to create the responsive ad.

    $responsiveAdImageMedia = GetImageMedia(
        "Image191x100",
        $mediaFilePath . $responsiveAdMediaFileName
    );

    $addMedia = array();
    $addMedia[] = $responsiveAdImageMedia;

    print("-----\r\nAddMedia:\r\n");
    $mediaIds = CampaignManagementExampleHelper::AddMedia(
        $GLOBALS['AuthorizationData']->AccountId,
        $addMedia
    )->MediaIds;
    print("MediaIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($mediaIds);
                    
    // Create an Audience campaign with one ad group and a responsive ad.
        
    $campaigns = array();   
    $campaign = new Campaign();
    // CampaignType must be set for Audience campaigns
    $campaign->CampaignType = CampaignType::Audience;    
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
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

    // Add a responsive ad within the ad group.

    $ads = array();
    $responsiveAd = new ResponsiveAd();
    $responsiveAd->BusinessName = "Contoso";
    $responsiveAd->CallToAction = CallToAction::AddToCart;
    $responsiveAd->FinalUrls = array("http://www.contoso.com/womenshoesale");
    $responsiveAd->Headline = "Fast & Easy Setup";
    // You are only required to provide a landscape image asset. 
    // Optionally you can include additional asset links, i.e., one image asset for each supported sub type. 
    // For any image asset sub types that you do not explicitly set, 
    // the service will automatically create image asset links by cropping the LandscapeImageMedia.
    $images = array();
    $landscapeImageMediaAssetLink = new AssetLink();
    $landscapeImageMediaAsset = new ImageAsset();
    $landscapeImageMediaAsset->CropHeight = null;
    $landscapeImageMediaAsset->CropWidth = null;
    $landscapeImageMediaAsset->CropX = null;
    $landscapeImageMediaAsset->CropY = null;
    $landscapeImageMediaAsset->Id = $mediaIds->long[0];
    $landscapeImageMediaAsset->Name="My LandscapeImageMedia";
    $landscapeImageMediaAsset->SubType="LandscapeImageMedia";
    $landscapeImageMediaAssetLink->Asset = new SoapVar(
        $landscapeImageMediaAsset, 
        SOAP_ENC_OBJECT, 
        'ImageAsset', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $images[] = $landscapeImageMediaAssetLink;
    $responsiveAd->Images = $images;
    $responsiveAd->LongHeadline = "Find New Customers & Increase Sales!";
    $responsiveAd->Text = "Find New Customers & Increase Sales! Start Advertising on Contoso Today.";

    $ads[] = new SoapVar(
        $responsiveAd, 
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

    // Delete the account's media.

    print("-----\r\nDeleteMedia:\r\n");
    CampaignManagementExampleHelper::DeleteMedia(
        $GLOBALS['AuthorizationData']->AccountId, 
        $mediaIds
    );
    
    foreach ($mediaIds->long as $id)
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

function GetImageMedia(
    $mediaType,
    $imageFileName){
    $image = new Image();
    $image->Data = GetBase64ImageData($imageFileName);
    $image->MediaType = $mediaType;
    $image->Type = "Image";

    $encodedImage = new SoapVar(
        $image, 
        SOAP_ENC_OBJECT, 
        'Image', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    return $encodedImage;
}

function GetBase64ImageData($imageFileName){
    $imageData = file_get_contents($imageFileName);
    $base64ImageData = base64_encode($imageData);

    return $base64ImageData;
}
