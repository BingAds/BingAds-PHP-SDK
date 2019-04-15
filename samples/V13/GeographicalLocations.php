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
use DateTime;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

// The full path where you want to download the geographical locations file.

$GLOBALS['LocalFile'] = "c:\\geolocations\\geolocations.csv";

// The temporary location of the download file.

$GLOBALS['TempFile'] = "c:\\geolocations\\temp.csv";

// The latest supported file format version is 2.0. 

$Version = "2.0";

// The language and locale of the geographical locations file available for download.
// This example uses 'en' (English). Supported locales are 'zh-Hant' (Traditional Chinese), 'en' (English), 'fr' (French), 
// 'de' (German), 'it' (Italian), 'pt-BR' (Portuguese - Brazil), and 'es' (Spanish). 

$LanguageLocale = "en";

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    date_default_timezone_set('UTC');

    // Going forward you should track the date and time of the previous download,  
    // and compare it with the last modified time provided by the service.
    $previousSyncTimeUtc = new DateTime('2017-08-10T00:00:00-00:00');
    
    print("-----\r\nGetGeoLocationsFileUrl:\r\n");
    $getGeoLocationsFileUrlResponse = CampaignManagementExampleHelper::GetGeoLocationsFileUrl(
        $Version, 
        $LanguageLocale
    );

    $fileUrl = $getGeoLocationsFileUrlResponse->FileUrl;
    $fileUrlExpiryTimeUtc = $getGeoLocationsFileUrlResponse->FileUrlExpiryTimeUtc;
    $lastModifiedTimeUtc = $getGeoLocationsFileUrlResponse->LastModifiedTimeUtc;

    printf("FileUrl: %s\r\n", $fileUrl);
    printf("FileUrlExpiryTimeUtc: %s\r\n", $fileUrlExpiryTimeUtc);
    printf("LastModifiedTimeUtc: %s\r\n", $lastModifiedTimeUtc);
    
    // Download the file if it was modified since the previous download.
    if($previousSyncTimeUtc < new DateTime($lastModifiedTimeUtc))
    {
        printf("Downloading the file locally: %s\r\n", 
            $GLOBALS['LocalFile']
        );
        DownloadFile($fileUrl);
    }
    else
    {
        printf("The file has not been modified since your previous sync time (%s).\r\n", 
            $previousSyncTimeUtc->format('Y-m-d\TH:i:se')
        );
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
        printf("Downloaded the geographical locations to %s.\r\n", $GLOBALS['LocalFile']);
        rename($GLOBALS['TempFile'], $GLOBALS['LocalFile']);
    }
    else
    {
        printf("The geographical locations file was not successfully downloaded.\r\n");
        unlink($GLOBALS['TempFile']);
    }
}
