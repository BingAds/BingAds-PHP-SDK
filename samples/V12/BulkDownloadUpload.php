<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/AuthHelper.php";
include "/BulkExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;
use ZipArchive;

// Specify the Microsoft\BingAds\V12\Bulk classes that will be used.
use Microsoft\BingAds\V12\Bulk\DownloadCampaignsByAccountIdsRequest;
use Microsoft\BingAds\V12\Bulk\DownloadEntity;
use Microsoft\BingAds\V12\Bulk\DataScope;
use Microsoft\BingAds\V12\Bulk\CampaignScope;
use Microsoft\BingAds\V12\Bulk\GetBulkDownloadStatusRequest;
use Microsoft\BingAds\V12\Bulk\DownloadFileType;
use Microsoft\BingAds\V12\Bulk\PerformanceStatsDateRange;
use Microsoft\BingAds\V12\Bulk\CustomDateRangeEnd;
use Microsoft\BingAds\V12\Bulk\CustomDateRangeStart;
use Microsoft\BingAds\V12\Bulk\Date;
use Microsoft\BingAds\V12\Bulk\GetBulkUploadUrlRequest;
use Microsoft\BingAds\V12\Bulk\ResponseMode;
use Microsoft\BingAds\V12\Bulk\GetBulkUploadStatusRequest;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\BulkExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['BulkProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");


// The full path to the bulk file.

$BulkFilePath = "c:\\bulk\\campaigns.zip";

// The full path to the previously extracted bulk file.
// This file is used to access the last sync time.

$ExtractedFilePath = "c:\\bulk\\extracted\\accounts.csv";

// The full path to the upload result file.

$UploadResultFilePath = "c:\\bulk\\uploadresults.zip";

// Specifies the bulk file format.

$DownloadFileType = DownloadFileType::Csv;

// Confirm that the download folder exist; otherwise, exit.

$length = strrpos($BulkFilePath, '\\');
$folder = substr($BulkFilePath, 0, $length);

if (!is_dir($folder))
{
    printf("The output folder, %s, does not exist.\nEnsure that the " .
        "folder exists and try again.", $folder);
    return;
}

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['BulkProxy'] = new ServiceClient(
        ServiceClientType::BulkVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $accountIds = array();
    $accountIds[] = $GLOBALS['AuthorizationData']->AccountId;

    $dataScope = DataScope::EntityData;
    
    $downloadEntities = array (
    	DownloadEntity::Ads,
    	DownloadEntity::AdGroups,
    	DownloadEntity::Campaigns,
    	DownloadEntity::Keywords,
        DownloadEntity::AdGroupProductPartitions,
        DownloadEntity::CampaignProductScopes
    	);

    $formatVersion = "6.0";
    
    $lastSyncTimeInUTC = GetLastSyncTime($ExtractedFilePath);
    
    // The request ID will be used to poll for status before downloading the bulk file.
    
    $downloadRequestId = BulkExampleHelper::DownloadCampaignsByAccountIds(
        $accountIds,
        null, // By default the compression type is Zip
        $dataScope,
        $downloadEntities,
        $DownloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC,
        null)->DownloadRequestId;
    
    $waitTime = 5 * 1; 
        
    if ($downloadRequestId != null)
    {
        printf("Download Request Id: %s\n", $downloadRequestId);

        $downloadSuccess = false;
    
    	// This sample polls every 30 seconds up to 5 minutes.
    	// In production you may poll the status every 1 to 2 minutes for up to one hour.
    	// If the call succeeds, stop polling. If the call or 
    	// download fails, the call throws a fault.
    
    	for ($i = 0; $i < 10; $i++)
    	{
    		sleep($waitTime);
    
    		// GetDownloadRequestStatus helper method calls the corresponding Bing Ads service operation 
                // to get the download status.
            
    		$downloadRequestStatus = BulkExampleHelper::GetBulkDownloadStatus($downloadRequestId)->RequestStatus;
    
        	if (($downloadRequestStatus != null) && ($downloadRequestStatus == "Completed"))
        	{
        		$downloadSuccess = true;
        		break;
        	}
        }

        if ($downloadSuccess)
        {
            $downloadUrl = BulkExampleHelper::GetBulkDownloadStatus($downloadRequestId)->ResultFileUrl;
            printf("Downloading from %s.\n\n", $downloadUrl);
            DownloadFile($downloadUrl, $BulkFilePath);
            printf("The download file was written to %s.\n", $BulkFilePath);
        }
        else // Pending
        {
        	printf("The request is taking longer than expected.\n " .
        			"Save the download request ID (%s) and try again later.\n",
        			$downloadRequestId);
        }
    }
    
    // You may unzip and update the downloaded bulk file or prepare a new file elsewhere.
    // Changes to the bulk file are not shown here.

    DecompressFile($BulkFilePath, $ExtractedFilePath);
    CompressFile($ExtractedFilePath, $BulkFilePath);
    
    // Use the bulk service to upload a bulk file.
    
    $responseMode = ResponseMode::ErrorsAndResults;
    
    $uploadResponse = BulkExampleHelper::GetBulkUploadUrl(
        $responseMode,
    	$GLOBALS['AuthorizationData']->AccountId);
    
    $uploadRequestId = $uploadResponse->RequestId;
    $uploadUrl = $uploadResponse->UploadUrl;
    
    printf("Uploading file from %s.\n", $BulkFilePath);
    printf("Upload Request Id: %s\n", $uploadRequestId);
    printf("Upload Url: %s\n", $uploadUrl);
    
    $uploadSuccess = UploadFile(
        $uploadUrl, 
        $BulkFilePath);
    
    // If the file was not uploaded, do not continue to poll for results.
    if($uploadSuccess == false){
        return;
    }
    
    // This sample polls every 30 seconds up to 5 minutes.
    // In production you may poll the status every 1 to 2 minutes for up to one hour.
    // If the call succeeds, stop polling. If the call or
    // download fails, the call throws a fault.
    
    for ($i = 0; $i < 10; $i++)
    {
    	sleep($waitTime);
        
    	// Get the upload request status.
    	$uploadRequestStatus = BulkExampleHelper::GetBulkUploadStatus($uploadRequestId)->RequestStatus;
        
    	if (($uploadRequestStatus != null) && (($uploadRequestStatus == "Completed")
    		|| ($uploadRequestStatus == "CompletedWithErrors")))
    	{
	    	$uploadSuccess = true;
	    	break;
    	}
    }
    
    if ($uploadSuccess)
    {
    	// Get the upload result file Url.
    	$uploadResultFileUrl = BulkExampleHelper::GetBulkUploadStatus($uploadRequestId)->ResultFileUrl;
    	DownloadFile($uploadResultFileUrl, $UploadResultFilePath);
    	printf("The upload result file was written to %s.\n", $UploadResultFilePath);
    }
    else // Pending
    {
    	printf("The request is taking longer than expected.\n" +
    	"Save the upload ID (%s) and try again later.", $uploadRequestId);
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
        BulkExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        BulkExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
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

// Using the URL returned by the GetBulkUploadUrl operation,
// POST the bulk file using a HTTP client.

function UploadFile($uploadUrl, $filePath)
{
    date_default_timezone_set("UTC");
    $ch = curl_init($uploadUrl);

    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

    if(!isset($GLOBALS['AuthorizationData']))
    {
        throw new Exception("AuthorizationData is not set.");
    }
    
    // If you are using OAuth, then you must include the AuthenticationToken header element
    // instead of UserName and Password.
    if(isset($GLOBALS['AuthorizationData']->Authentication) && isset($GLOBALS['AuthorizationData']->Authentication->Type))
    {
        $authorizationHeaders = array();
        $authorizationHeaders[] = "DeveloperToken: " . $GLOBALS['AuthorizationData']->DeveloperToken;
        $authorizationHeaders[] = "CustomerId: " . $GLOBALS['AuthorizationData']->CustomerId;
        $authorizationHeaders[] = "CustomerAccountId: " . $GLOBALS['AuthorizationData']->AccountId;
        
        if($GLOBALS['AuthorizationData']->Authentication->Type == "PasswordAuthentication")
        {
            $authorizationHeaders[] = "UserName: " . $GLOBALS['AuthorizationData']->Authentication->UserName;
            $authorizationHeaders[] = "Password: " . $GLOBALS['AuthorizationData']->Authentication->Password;
        }
        elseif($GLOBALS['AuthorizationData']->Authentication->Type == "OAuthWebAuthCodeGrant" ||
                $GLOBALS['AuthorizationData']->Authentication->Type == "OAuthDesktopMobileAuthCodeGrant" ||
                $GLOBALS['AuthorizationData']->Authentication->Type == "OAuthDesktopMobileImplicitGrant") 
        {
            $authorizationHeaders[] = "AuthenticationToken: " . $GLOBALS['AuthorizationData']->Authentication->OAuthTokens->AccessToken;
        }
    }
    else
    {
        throw new Exception("Invalid Authentication Type.");
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $authorizationHeaders);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $file = curl_file_create($filePath, "application/zip", "payload.zip");
    curl_setopt($ch, CURLOPT_POSTFIELDS, array("payload" => $file));

    $result = curl_exec($ch);
    $info = curl_getinfo($ch);
    $http_code = $info['http_code'];
              
    if (curl_errno($ch))
    {
        print "Curl Error: " . curl_error($ch) . "\n";
    }
    else
    {
        print "Upload Result:\n" . $result . "\n";
        print "HTTP Result Code:\n" . $http_code . "\n";
        // Whether or not the curl execution failed, the response could include Bing Ads error codes  
        // if the bulk file upload failed, for example in the range of 3220-3227.
        // 
        // {
        //     "TrackingId":"Tracking-Id-Here",
        //     "RequestId":"Request-Id-Here",
        //     "Code":3224,
        //     "ErrorCode":"BulkServiceUrlAlreadyUsedForUpload",
        //     "Message":"The URL has already been used for file upload."
        // }
    }
             
    curl_close($ch);
    
    if($http_code == 200){
        return true;
    }
    else {
        return false;
    }
}

// Using the URL that the GetBulkDownloadStatus operation returned,
// send an HTTP request to get the download data and write it to the specified
// ZIP file.

function DownloadFile($downloadUrl, $filePath)
{
    if (!$reader = fopen($downloadUrl, 'rb'))
    {
        throw new Exception("Failed to open URL " . $downloadUrl . ".");
    }

    if (!$writer = fopen($filePath, 'wb'))
    {
        fclose($reader);
        throw new Exception("Failed to create ZIP file " . $filePath . ".");
    }

    $bufferSize = 100 * 1024;

    while (!feof($reader))
    {
        if (false === ($buffer = fread($reader, $bufferSize)))
        {
            fclose($reader);
            fclose($writer);
            throw new Exception("Read operation from URL failed.");
        }

        if (fwrite($writer, $buffer) === false)
        {
            fclose($reader);
            fclose($writer);
            throw new Exception ("Write operation to ZIP file failed.");
        }
    }

    fclose($reader);
    fflush($writer);
    fclose($writer);
}

// Decompresses a ZIP Archive and writes the contents to the specified file path.

function DecompressFile($fromZipArchive, $toExtractedFile)
{
    $archive = new ZipArchive;

    if ($archive->open($fromZipArchive) === TRUE) {
        $archive->extractTo(dirname($toExtractedFile));
        $archive->close();
    }
    else {
        throw new Exception ("Decompress operation from ZIP file failed.");
    }
}

// Compresses a bulk file to a ZIP Archive.

function CompressFile($fromExtractedFile, $toZipArchive)
{
    $archive = new ZipArchive;

    if ($archive->open($toZipArchive, ZipArchive::OVERWRITE) === TRUE) {
        $archive->addFile($fromExtractedFile, basename($fromExtractedFile));
        $archive->close();
    }
    else {
        throw new Exception ("Compress operation to ZIP file failed.");
    }
}

// Get the time stamp of the last download from the previous
// download file. The SyncTime node contains the time stamp.

function GetLastSyncTime($path)
{
    $lastSyncTime = null;

    if (is_file($path))
    {
        $reader = @fopen($path, "r");

        try
        {
            $syncTimeColumn = 0;

            // The first record contains column header information, for example "Type" and "Sync Time".
            $record = fgets($reader);

            if($record != null)
            {
            	$fields = explode(",", $record, 100);
            	$column = 0;
            	
            	do
                {
                    $syncTimeColumn = ($fields[$column] == "Sync Time") ? $column : $syncTimeColumn;
                } while($syncTimeColumn == 0 && (++$column < count($fields)));
            }
            
            // Look for the Account record after any other metadata.

            $isAccount = false;

            do
            {
            	$record = fgets($reader);
                $fields = explode(",", $record, 100);
                if($fields[0] == "Account")
                {
                    date_default_timezone_set("UTC");
            	    $date = (new DateTime($fields[$syncTimeColumn]))->format('Y-m-d\TH:i:s');
            	    $lastSyncTime = ($fields[$syncTimeColumn] != "") ? $date : null;
                    $isAccount = true;
                }
            } while(!$isAccount);
            
            fclose($reader);
            $reader = null;

        }
        catch (Exception $e)
        {
            if (isset($reader))
            {
                fclose($reader);
            }
            throw $e;
        }
    }

    return $lastSyncTime;
}
 
?>
