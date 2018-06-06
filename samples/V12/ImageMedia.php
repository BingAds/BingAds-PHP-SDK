<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/AuthHelper.php";
include "/OutputHelper.php";
include "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Image;
use Microsoft\BingAds\V12\CampaignManagement\MediaEnabledEntityFilter;

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

// To run this example you'll need access to image media files 
// for responsive ads and image ad extensions.

$mediaFilePath = "c:\\dev\\media\\";

// For required aspect ratios and recommended dimensions please see 
// Image remarks at https://go.microsoft.com/fwlink/?linkid=872754.

$landscapeImageMediaFileName = "imageresponsivead1200x628.png";
$landscapeLogoMediaFileName = "imageresponsivead1200x300.png";
$squareImageMediaFileName = "imageresponsivead1200x1200.png";
$squareLogoMediaFileName = "imageresponsivead1100x1100.png";
$imageAdExtensionMediaFileName = "imageadextension300x200.png";

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $landscapeImageMedia = GetImageMedia(
        "Image191x100",
        $mediaFilePath . $landscapeImageMediaFileName);

    $landscapeLogoMedia = GetImageMedia(
        "Image4x1",
        $mediaFilePath . $landscapeLogoMediaFileName);

    $squareImageMedia = GetImageMedia(
        "Image1x1",
        $mediaFilePath . $squareImageMediaFileName);

    $squareLogoMedia = GetImageMedia(
        "Image1x1",
        $mediaFilePath . $squareLogoMediaFileName);

    $imageAdExtensionMedia = GetImageMedia(
        "Image15x10",
        $mediaFilePath . $imageAdExtensionMediaFileName);

    $addMedia = array();
    $addMedia[] = $landscapeImageMedia;
    $addMedia[] = $landscapeLogoMedia;
    $addMedia[] = $squareImageMedia;
    $addMedia[] = $squareLogoMedia;
    $addMedia[] = $imageAdExtensionMedia;

    CampaignManagementExampleHelper::OutputArrayOfMedia($addMedia);

    $imageMediaIds = CampaignManagementExampleHelper::AddMedia(
        $GLOBALS['AuthorizationData']->AccountId,
        $addMedia)->MediaIds;
    
    // The index of returned IDs is consistent with the order you submitted them in the request;
    // however, the sequence of the IDs themselves is not guaranteed. For example you might observe:
    // - Landscape Image Media Id == imageMediaIds[0] == 1
    // - Landscape Logo Media Id == imageMediaIds[1] == 4
    // - Square Image Media Id == imageMediaIds[2] == 3
    // - Square Logo Media Id == imageMediaIds[3] == 2
    // - Image Ad Extension Media Id == imageMediaIds[4] == 0

    // You can use the first four Media Ids when you add or update a Responsive Ad
    // in an Audience campaign e.g., see AudienceCampaigns.php. 

    $deleteImageMediaIds = $imageMediaIds;
    $extensionMediaId = array_pop($imageMediaIds->long);
    $adMediaIds = $imageMediaIds;
    
    print("Media Ids for Responsive Ad:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adMediaIds);

    // You can use the fifth Media Id when you add or update an Image Ad Extension
    // in a Search campaign e.g., see AdExtensions.php.

    printf("Media Id for Image Ad Extension: %s\n", $extensionMediaId);
    
    // Get the media representations to confirm the stored dimensions
    // and get the Url where you can later view or download the media.

    $getResponsiveAdMediaMetaData =CampaignManagementExampleHelper::GetMediaMetaDataByAccountId(
        MediaEnabledEntityFilter::ResponsiveAd)->MediaMetaData;
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($getResponsiveAdMediaMetaData);

    $getImageAdExtensionMediaMetaData = CampaignManagementExampleHelper::GetMediaMetaDataByAccountId(
        MediaEnabledEntityFilter::ImageAdExtension)->MediaMetaData;
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($getImageAdExtensionMediaMetaData);

    $getMediaMetaData = CampaignManagementExampleHelper::GetMediaMetaDataByIds($imageMediaIds)->MediaMetaData;
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($getMediaMetaData);
    
    // Comment out (disable) the delete operation if you want to use the media IDs  
    // in another example e.g., AudienceCampaigns.php.
    array_push($imageMediaIds->long, $extensionMediaId);
    CampaignManagementExampleHelper::DeleteMedia(
        $GLOBALS['AuthorizationData']->AccountId, 
        $imageMediaIds);
    
    foreach ($imageMediaIds->long as $id)
    {
        printf("Deleted Media Id %s\n", $id);
    }
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

function GetImageMedia(
    $mediaType,
    $imageFileName)
{
    $image = new Image();
    $image->Data = GetBase64ImageData($imageFileName);
    $image->MediaType = $mediaType;
    $image->Type = "Image";

    $encodedImage = new SoapVar(
        $image, 
        SOAP_ENC_OBJECT, 
        'Image', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    return $encodedImage;
}

function GetBase64ImageData($imageFileName)
{
    $imageData = file_get_contents($imageFileName);
    $base64ImageData = base64_encode($imageData);

    return $base64ImageData;
}
