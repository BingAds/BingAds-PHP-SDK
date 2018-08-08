<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/ReportRequestLibrary.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\Reporting classes that will be used.
use Microsoft\BingAds\V11\Reporting\ReportRequestStatusType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V11\AuthHelper;
use Microsoft\BingAds\Samples\V11\ReportRequestLibrary;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify the file to download the report to. Because the file is
// compressed use the .zip file extension.

$DownloadPath = "c:\\reports\\keywordperf.zip";

// Confirm that the download folder exist; otherwise, exit.

$length = strrpos($DownloadPath, '\\');
$folder = substr($DownloadPath, 0, $length);

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

    $GLOBALS['ReportingProxy'] = new ServiceClient(ServiceClientType::ReportingVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // You can submit one of the example reports, or build your own.
    $report = ReportRequestLibrary::GetAccountPerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    $report = ReportRequestLibrary::GetAudiencePerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    $report = ReportRequestLibrary::GetKeywordPerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    
    // SubmitGenerateReport helper method calls the corresponding Bing Ads service operation
    // to request the report identifier. The identifier is used to check report generation status
    // before downloading the report.
    
    $reportRequestId = ReportRequestLibrary::SubmitGenerateReport($report)->ReportRequestId;
    
    printf("Report Request ID: %s\n\n", $reportRequestId);
    
    $waitTime = 30 * 1; 
    $reportRequestStatus = null;
    
    // This sample polls every 30 seconds up to 5 minutes.
    // In production you may poll the status every 1 to 2 minutes for up to one hour.
    // If the call succeeds, stop polling. If the call or 
    // download fails, the call throws a fault.
    
    for ($i = 0; $i < 10; $i++)
    {
    	sleep($waitTime);
    
    	// PollGenerateReport helper method calls the corresponding Bing Ads service operation
    	// to get the report request status.
    	
    	$reportRequestStatus = ReportRequestLibrary::PollGenerateReport($reportRequestId)->ReportRequestStatus;
    
    	if ($reportRequestStatus->Status == ReportRequestStatusType::Success ||
    		$reportRequestStatus->Status == ReportRequestStatusType::Error)
    	{
    		break;
    	}
    }

    if ($reportRequestStatus != null)
    {
    	if ($reportRequestStatus->Status == ReportRequestStatusType::Success)
    	{
            $reportDownloadUrl = $reportRequestStatus->ReportDownloadUrl;
            
            if($reportDownloadUrl == null)
            {
                print "No report data for the submitted request\n";
            }
            else
            {
                printf("Downloading from %s.\n\n", $reportDownloadUrl);
                DownloadFile($reportDownloadUrl, $DownloadPath);
                printf("The report was written to %s.\n", $DownloadPath);
            }
    		
    	}
    	else if ($reportRequestStatus->Status == ReportRequestStatusType::Error)
    	{
    		printf("The request failed. Try requesting the report " .
    				"later.\nIf the request continues to fail, contact support.\n");
    	}
    	else  // Pending
    	{
    		printf("The request is taking longer than expected.\n " .
    				"Save the report ID (%s) and try again later.\n",
    				$reportRequestId);
    	}
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
        ReportingExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        ReportingExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
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

// Using the URL that the PollGenerateReport operation returned,
// send an HTTP request to get the report and write it to the specified
// ZIP file.

function DownloadFile($reportDownloadUrl, $downloadPath)
{
    if (!$reader = fopen($reportDownloadUrl, 'rb'))
    {
        throw new Exception("Failed to open URL " . $reportDownloadUrl . ".");
    }

    if (!$writer = fopen($downloadPath, 'wb'))
    {
        fclose($reader);
        throw new Exception("Failed to create ZIP file " . $downloadPath . ".");
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
             $exception = new Exception("Write operation to ZIP file failed.");
        }
    }

    fclose($reader);
    fflush($writer);
    fclose($writer);
}
