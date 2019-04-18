<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/BulkExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;
use ZipArchive;

// Specify the Microsoft\BingAds\V13\Bulk classes that will be used.
use Microsoft\BingAds\V13\Bulk\DownloadEntity;
use Microsoft\BingAds\V13\Bulk\DataScope;
use Microsoft\BingAds\V13\Bulk\DownloadFileType;
use Microsoft\BingAds\V13\Bulk\Date;
use Microsoft\BingAds\V13\Bulk\ResponseMode;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\BulkExampleHelper;

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
    printf("The output folder, %s, does not exist.\r\nEnsure that the " .
        "folder exists and try again.", $folder);
    return;
}

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    $accountIds = array();
    $accountIds[] = $GLOBALS['AuthorizationData']->AccountId;

    $dataScope = DataScope::EntityData;
    
    $downloadEntities = array (
    	DownloadEntity::Ads,
    	DownloadEntity::AdGroups,
    	DownloadEntity::Campaigns
    );

    $formatVersion = "6.0";
    
    $lastSyncTimeInUTC = GetLastSyncTime($ExtractedFilePath);
    
    // The request ID will be used to poll for status before downloading the bulk file.
    
    print("-----\r\nDownloadCampaignsByAccountIds:\r\n");
    $downloadRequestId = BulkExampleHelper::DownloadCampaignsByAccountIds(
        $accountIds,
        null, // By default the compression type is Zip
        $dataScope,
        $downloadEntities,
        $DownloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC,
        null
    )->DownloadRequestId;
    
    $waitTime = 5 * 1; 
        
    if ($downloadRequestId != null)
    {
        printf("Download Request Id: %s\r\n", $downloadRequestId);

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
        
            print("-----\r\nGetBulkDownloadStatus:\r\n");
    		$getBulkDownloadStatusResponse = BulkExampleHelper::GetBulkDownloadStatus(
                $downloadRequestId
            );
            $requestStatus = $getBulkDownloadStatusResponse->RequestStatus;
            $resultFileUrl = $getBulkDownloadStatusResponse->ResultFileUrl;
            printf("PercentComplete: %s\r\n", $getBulkDownloadStatusResponse->PercentComplete);
            printf("RequestStatus: %s\r\n", $requestStatus);
            printf("ResultFileUrl: %s\r\n", $resultFileUrl);
    
        	if (($requestStatus != null) && ($requestStatus == "Completed"))
        	{
        		$downloadSuccess = true;
        		break;
        	}
        }

        if ($downloadSuccess)
        {
            // Download the file.
            printf("-----\r\nDownloading from %s...\r\n", $resultFileUrl);
            DownloadFile($resultFileUrl, $BulkFilePath);
            printf("The download file was written to %s.\r\n", $BulkFilePath);
        }
        else // Pending
        {
        	printf("The request is taking longer than expected.\r\n " .
                "Save the download request ID (%s) and try again later.\r\n",
                $downloadRequestId
            );
        }
    }
    
    // You may unzip and update the downloaded bulk file or prepare a new file elsewhere.
    // Changes to the bulk file are not shown here.

    DecompressFile($BulkFilePath, $ExtractedFilePath);
    CompressFile($ExtractedFilePath, $BulkFilePath);
    
    // Use the bulk service to upload a bulk file.
    
    $responseMode = ResponseMode::ErrorsAndResults;
    
    print("-----\r\nGetBulkUploadUrl:\r\n");
    $uploadResponse = BulkExampleHelper::GetBulkUploadUrl(
        $responseMode,
        $GLOBALS['AuthorizationData']->AccountId
    );
    
    $uploadRequestId = $uploadResponse->RequestId;
    $uploadUrl = $uploadResponse->UploadUrl;
    printf("RequestId: %s\r\n", $uploadRequestId);
    printf("UploadUrl: %s\r\n", $uploadUrl);
    
    printf("-----\r\nUploading file from %s.\r\n", $BulkFilePath);  
    $uploadSuccess = UploadFile(
        $uploadUrl, 
        $BulkFilePath
    );
    
    // If the file was not uploaded, do not continue to poll for results.
    if($uploadSuccess == false){
        print "Upload failed.\r\n";
        return;
    }
    else{
        print "Upload succeeded.\r\n";
    }
    
    // This sample polls every 30 seconds up to 5 minutes.
    // In production you may poll the status every 1 to 2 minutes for up to one hour.
    // If the call succeeds, stop polling. If the call or
    // download fails, the call throws a fault.
    
    for ($i = 0; $i < 10; $i++)
    {
    	sleep($waitTime);
        
        // Get the upload request status.
        print("-----\r\nGetBulkUploadStatus:\r\n");
    	$getBulkUploadStatusResponse = BulkExampleHelper::GetBulkUploadStatus(
            $uploadRequestId
        );

        $requestStatus = $getBulkUploadStatusResponse->RequestStatus;
        $resultFileUrl = $getBulkUploadStatusResponse->ResultFileUrl;
        printf("PercentComplete: %s\r\n", $getBulkUploadStatusResponse->PercentComplete);
        printf("RequestStatus: %s\r\n", $requestStatus);
        printf("ResultFileUrl: %s\r\n", $resultFileUrl);
        
    	if (($requestStatus != null) && (($requestStatus == "Completed")
    		|| ($requestStatus == "CompletedWithErrors")))
    	{
	    	$uploadSuccess = true;
	    	break;
    	}
    }
    
    if ($uploadSuccess)
    {
        // Get the upload result file.
        printf("-----\r\nDownloading the upload result file from %s...\r\n", $resultFileUrl);
    	DownloadFile($resultFileUrl, $UploadResultFilePath);
    	printf("The upload result file was written to %s.\r\n", $UploadResultFilePath);
    }
    else // Pending
    {
    	printf("The request is taking longer than expected.\r\n" +
    	"Save the upload ID (%s) and try again later.", $uploadRequestId);
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
    
    // Set the authorization headers.
    if(isset($GLOBALS['AuthorizationData']->Authentication) && isset($GLOBALS['AuthorizationData']->Authentication->Type))
    {
        $authorizationHeaders = array();
        $authorizationHeaders[] = "DeveloperToken: " . $GLOBALS['AuthorizationData']->DeveloperToken;
        $authorizationHeaders[] = "CustomerId: " . $GLOBALS['AuthorizationData']->CustomerId;
        $authorizationHeaders[] = "CustomerAccountId: " . $GLOBALS['AuthorizationData']->AccountId;
        
        if(isset($GLOBALS['AuthorizationData']->Authentication->OAuthTokens)) 
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
        print "Curl Error: " . curl_error($ch) . "\r\n";
    }
    else
    {
        print "Upload Result:\n" . $result . "\r\n";
        print "HTTP Result Code:\n" . $http_code . "\r\n";
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
