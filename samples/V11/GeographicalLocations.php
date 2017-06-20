<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\v11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\v11\CustomerManagementHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// The full path where you want to download the geographical locations file.

$GLOBALS['LocalFile'] = "c:\\geolocations\\geolocations.csv";

// The temporary location of the downloaded locations file.

$GLOBALS['TempFile'] = "c:\\geolocations\\temp.csv";

// The only supported file format version is 1.0. 

$Version = "1.0";

// The language and locale of the geographical locations file available for download.
// This example uses 'en' (English). Supported locales are 'zh-Hant' (Traditional Chinese), 'en' (English), 'fr' (French), 
// 'de' (German), 'it' (Italian), 'pt-BR' (Portuguese - Brazil), and 'es' (Spanish). 

$LanguageLocale = "en";

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    date_default_timezone_set('UTC');

    // Going forward you should track the date and time of the previous download,  
    // and compare it with the last modified time provided by the service.
    $previousSyncTimeUtc = new DateTime('2017-06-18T00:00:00-00:00');
    
    $getGeoLocationsFileUrlResponse = CampaignManagementHelper::GetGeoLocationsFileUrl(
        $Version, 
        $LanguageLocale);

    $fileUrl = $getGeoLocationsFileUrlResponse->FileUrl;
    $fileUrlExpiryTimeUtc = $getGeoLocationsFileUrlResponse->FileUrlExpiryTimeUtc;
    $lastModifiedTimeUtc = $getGeoLocationsFileUrlResponse->LastModifiedTimeUtc;

    printf("FileUrl: %s\n", $fileUrl);
    printf("FileUrlExpiryTimeUtc: %s\n", $fileUrlExpiryTimeUtc);
    printf("LastModifiedTimeUtc: %s\n", $lastModifiedTimeUtc);
    
    // Download the file if it was modified since the previous download.
    if($previousSyncTimeUtc < $lastModifiedTimeUtc)
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
    // Output the last request/response.
	
    print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    // Campaign Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
        ? $e->detail->AdApiFaultDetail->Errors->AdApiError
        : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

        // If the AdApiError array is not null, the following are examples of error codes that may be found.
        foreach ($errors as $error)
        {
            print "AdApiError\n";
            printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
                    break;
            }
        }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
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

?>
