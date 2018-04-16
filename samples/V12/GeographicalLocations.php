<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/AuthHelper.php";
include "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// The full path where you want to download the geographical locations file.

$GLOBALS['LocalFile'] = "c:\\geolocations\\geolocations.csv";

// The temporary location of the downloaded locations file.

$GLOBALS['TempFile'] = "c:\\geolocations\\temp.csv";

// The latest supported file format version is 2.0. 

$Version = "2.0";

// The language and locale of the geographical locations file available for download.
// This example uses 'en' (English). Supported locales are 'zh-Hant' (Traditional Chinese), 'en' (English), 'fr' (French), 
// 'de' (German), 'it' (Italian), 'pt-BR' (Portuguese - Brazil), and 'es' (Spanish). 

$LanguageLocale = "en";

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

    date_default_timezone_set('UTC');

    // Going forward you should track the date and time of the previous download,  
    // and compare it with the last modified time provided by the service.
    $previousSyncTimeUtc = new DateTime('2017-08-10T00:00:00-00:00');
    
    $getGeoLocationsFileUrlResponse = CampaignManagementExampleHelper::GetGeoLocationsFileUrl(
        $Version, 
        $LanguageLocale);

    $fileUrl = $getGeoLocationsFileUrlResponse->FileUrl;
    $fileUrlExpiryTimeUtc = $getGeoLocationsFileUrlResponse->FileUrlExpiryTimeUtc;
    $lastModifiedTimeUtc = $getGeoLocationsFileUrlResponse->LastModifiedTimeUtc;

    printf("FileUrl: %s\n", $fileUrl);
    printf("FileUrlExpiryTimeUtc: %s\n", $fileUrlExpiryTimeUtc);
    printf("LastModifiedTimeUtc: %s\n", $lastModifiedTimeUtc);
    
    // Download the file if it was modified since the previous download.
    if($previousSyncTimeUtc < new DateTime($lastModifiedTimeUtc))
    {
        printf("Downloading the file locally: %s\n", $GLOBALS['LocalFile']);
        DownloadFile($fileUrl);
    }
    else
    {
        printf("The file has not been modified since your previous sync time (%s).\n", $previousSyncTimeUtc->format('Y-m-d\TH:i:se'));
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

function DownloadFile($fileUrl){
    $ch = curl_init($fileUrl);
    $fileHandle = fopen($GLOBALS['TempFile'], 'w+');

    curl_setopt($ch, CURLOPT_FILETIME, true); 
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_FILE, $fileHandle); 
    
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch); 

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);     
 
    curl_close($ch);
    fclose($fileHandle);
    
    if ($httpCode == 200)
    {
        printf("Downloaded the geographical locations to %s.\n", $GLOBALS['LocalFile']);
        rename($GLOBALS['TempFile'], $GLOBALS['LocalFile']);
    }
    else
    {
        printf("The locations file was not successfully download.\n");
        unlink($GLOBALS['TempFile']);
    }
}
