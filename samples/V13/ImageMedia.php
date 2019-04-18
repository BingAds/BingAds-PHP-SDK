<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/OutputHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Image;
use Microsoft\BingAds\V13\CampaignManagement\MediaEnabledEntityFilter;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

// To run this example you'll need to provide your own images.  
// For required aspect ratios and recommended dimensions please see 
// Image remarks at https://go.microsoft.com/fwlink/?linkid=872754.

$mediaFilePath = "c:\\dev\\media\\";
$responsiveAdMediaFileName = "imageresponsivead1200x628.png";
$imageAdExtensionMediaFileName = "imageadextension300x200.png";

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    $responsiveAdImageMedia = GetImageMedia(
        "Image191x100",
        $mediaFilePath . $responsiveAdMediaFileName
    );

    $imageAdExtensionMedia = GetImageMedia(
        "Image15x10",
        $mediaFilePath . $imageAdExtensionMediaFileName
    );

    $addMedia = array();
    $addMedia[] = $responsiveAdImageMedia;
    $addMedia[] = $imageAdExtensionMedia;

    print("Ready to upload image media:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfMedia($addMedia);

    print("-----\r\nAddMedia:\r\n");
    $mediaIds = CampaignManagementExampleHelper::AddMedia(
        $GLOBALS['AuthorizationData']->AccountId,
        $addMedia
    )->MediaIds;
    print("MediaIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($mediaIds);
    
    // Get the media representations to confirm the stored dimensions
    // and get the Url where you can later view or download the media.

    print("-----\r\nGetMediaMetaDataByAccountId:\r\n");
    $mediaMetaData =CampaignManagementExampleHelper::GetMediaMetaDataByAccountId(
        MediaEnabledEntityFilter::ResponsiveAd,
        null
    )->MediaMetaData;
    print("MediaMetaData:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($mediaMetaData);

    print("-----\r\nGetMediaMetaDataByAccountId:\r\n");
    $mediaMetaData = CampaignManagementExampleHelper::GetMediaMetaDataByAccountId(
        MediaEnabledEntityFilter::ImageAdExtension,
        null
    )->MediaMetaData;
    print("MediaMetaData:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($mediaMetaData);

    print("-----\r\nGetMediaMetaDataByIds:\r\n");
    $mediaMetaData = CampaignManagementExampleHelper::GetMediaMetaDataByIds(
        $mediaIds
    )->MediaMetaData;
    print("MediaMetaData:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfMediaMetaData($mediaMetaData);
    
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
