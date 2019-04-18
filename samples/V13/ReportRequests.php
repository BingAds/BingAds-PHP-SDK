<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/ReportingExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\Reporting classes that will be used.
use Microsoft\BingAds\V13\Reporting\SubmitGenerateReportRequest;
use Microsoft\BingAds\V13\Reporting\PollGenerateReportRequest;
use Microsoft\BingAds\V13\Reporting\AccountPerformanceReportRequest;
use Microsoft\BingAds\V13\Reporting\AudiencePerformanceReportRequest;
use Microsoft\BingAds\V13\Reporting\KeywordPerformanceReportRequest;
use Microsoft\BingAds\V13\Reporting\ReportFormat;
use Microsoft\BingAds\V13\Reporting\ReportAggregation;
use Microsoft\BingAds\V13\Reporting\AccountThroughAdGroupReportScope;
use Microsoft\BingAds\V13\Reporting\CampaignReportScope;
use Microsoft\BingAds\V13\Reporting\AccountReportScope;
use Microsoft\BingAds\V13\Reporting\ReportTime;
use Microsoft\BingAds\V13\Reporting\ReportTimePeriod;
use Microsoft\BingAds\V13\Reporting\Date;
use Microsoft\BingAds\V13\Reporting\AccountPerformanceReportFilter;
use Microsoft\BingAds\V13\Reporting\KeywordPerformanceReportFilter;
use Microsoft\BingAds\V13\Reporting\DeviceTypeReportFilter;
use Microsoft\BingAds\V13\Reporting\AccountPerformanceReportColumn;
use Microsoft\BingAds\V13\Reporting\AudiencePerformanceReportColumn;
use Microsoft\BingAds\V13\Reporting\KeywordPerformanceReportColumn;
use Microsoft\BingAds\V13\Reporting\ReportRequestStatusType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\ReportingExampleHelper;

// Specify the file to download the report to. Because the file is
// compressed use the .zip file extension.

$DownloadPath = "c:\\reports\\MyReport.zip";

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
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // You can submit one of the example reports, or build your own.
    $report = GetAccountPerformanceReportRequest(
        $GLOBALS['AuthorizationData']->AccountId
    );
        
    // SubmitGenerateReport helper method calls the corresponding Bing Ads service operation
    // to request the report identifier. The identifier is used to check report generation status
    // before downloading the report.
    
    print("-----\r\nSubmitGenerateReport:\r\n");
    $reportRequestId = ReportingExampleHelper::SubmitGenerateReport(
        $report
    )->ReportRequestId;

    printf("Report Request ID: %s\r\n", $reportRequestId);
    
    $waitTime = 10 * 1; 
    $requestStatus = null;
    $resultFileUrl = null;
    
    // This sample polls every 10 seconds up to 5 minutes.
    // In production you may poll the status every 1 to 2 minutes for up to one hour.
    // If the call succeeds, stop polling. If the call or 
    // download fails, the call throws a fault.
    
    for ($i = 0; $i < 30; $i++)
    {
        printf("-----\r\nsleep(%s seconds)\r\n", $waitTime);
        sleep($waitTime);
        
        // Get the download request status.
        print("-----\r\nPollGenerateReport:\r\n");
    	$pollGenerateReportResponse = ReportingExampleHelper::PollGenerateReport(
            $reportRequestId
        );

        $requestStatus = $pollGenerateReportResponse->ReportRequestStatus->Status;
        $resultFileUrl = $pollGenerateReportResponse->ReportRequestStatus->ReportDownloadUrl;
        printf("RequestStatus: %s\r\n", $requestStatus);
        printf("ReportDownloadUrl: %s\r\n", $resultFileUrl);
    
    	if ($requestStatus == ReportRequestStatusType::Success ||
    		$requestStatus == ReportRequestStatusType::Error)
    	{
    		break;
    	}
    }

    if ($requestStatus != null)
    {
    	if ($requestStatus == ReportRequestStatusType::Success)
    	{            
            if($resultFileUrl == null)
            {
                print "No report data for the submitted request.\r\n";
            }
            else
            {
                printf("-----\r\nDownloading from %s.\r\n", $resultFileUrl);
                DownloadFile($resultFileUrl, $DownloadPath);
                printf("The report was written to %s.\r\n", $DownloadPath);
            }
    		
    	}
    	else if ($requestStatus == ReportRequestStatusType::Error)
    	{
    		printf("The request failed. Try requesting the report later.\r\n" .
                "If the request continues to fail, contact support.\r\n"
            );
    	}
    	else  // Pending
    	{
    		printf("The request is taking longer than expected.\r\n " .
                "Save the report ID (%s) and try again later.\r\n",
                $reportRequestId
            );
    	}
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

// Using the URL that the PollGenerateReport operation returned,
// send an HTTP request to get the report and write it to the specified
// ZIP file.

function DownloadFile($resultFileUrl, $downloadPath)
{
    if (!$reader = fopen($resultFileUrl, 'rb'))
    {
        throw new Exception("Failed to open URL " . $resultFileUrl . ".");
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

function GetKeywordPerformanceReportRequest($accountId) 
{
    $report = new KeywordPerformanceReportRequest();
    
    $report->Format = ReportFormat::Tsv;
    $report->ReportName = 'My Keyword Performance Report';
    $report->ReturnOnlyCompleteData = false;
    $report->Aggregation = ReportAggregation::Weekly;
    
    $report->Scope = new AccountThroughAdGroupReportScope();
    $report->Scope->AccountIds = array();
    $report->Scope->AccountIds[] = $accountId;
    $report->Scope->AdGroups = null;
    $report->Scope->Campaigns = null;
    
    $report->Time = new ReportTime();
    $report->Time->PredefinedTime = ReportTimePeriod::Yesterday;
            
    $report->Columns = array (
            KeywordPerformanceReportColumn::TimePeriod,
            KeywordPerformanceReportColumn::AccountId,
            KeywordPerformanceReportColumn::CampaignId,
            KeywordPerformanceReportColumn::Keyword,
            KeywordPerformanceReportColumn::KeywordId,
            KeywordPerformanceReportColumn::DeviceType,
            KeywordPerformanceReportColumn::BidMatchType,
            KeywordPerformanceReportColumn::Clicks,
            KeywordPerformanceReportColumn::Impressions,
            KeywordPerformanceReportColumn::Ctr,
            KeywordPerformanceReportColumn::AverageCpc,
            KeywordPerformanceReportColumn::Spend,
            KeywordPerformanceReportColumn::QualityScore
    );

    $encodedReport = new SoapVar(
        $report, 
        SOAP_ENC_OBJECT, 
        'KeywordPerformanceReportRequest', 
        $GLOBALS['ReportingProxy']->GetNamespace()
    );
    
    return $encodedReport;
}

function GetAccountPerformanceReportRequest($accountId) 
{
    $report = new AccountPerformanceReportRequest();
    
    $report->Format = ReportFormat::Tsv;
    $report->ReportName = 'My Account Performance Report';
    $report->ReturnOnlyCompleteData = false;
    $report->Aggregation = ReportAggregation::Weekly;
    
    $report->Scope = new AccountReportScope();
    $report->Scope->AccountIds = array();
    $report->Scope->AccountIds[] = $accountId;
        
    $report->Time = new ReportTime();
    $report->Time->PredefinedTime = ReportTimePeriod::Yesterday;

    $report->Columns = array (
            AccountPerformanceReportColumn::TimePeriod,
            AccountPerformanceReportColumn::AccountId,
            AccountPerformanceReportColumn::AccountName,
            AccountPerformanceReportColumn::Clicks,
            AccountPerformanceReportColumn::Impressions,
            AccountPerformanceReportColumn::Ctr,
            AccountPerformanceReportColumn::AverageCpc,
            AccountPerformanceReportColumn::Spend,
            AccountPerformanceReportColumn::DeviceOS
    );

    $encodedReport = new SoapVar(
        $report, 
        SOAP_ENC_OBJECT, 
        'AccountPerformanceReportRequest', 
        $GLOBALS['ReportingProxy']->GetNamespace()
    );
    
    return $encodedReport;
}

function GetAudiencePerformanceReportRequest($accountId) 
{
    $report = new AudiencePerformanceReportRequest();
    
    $report->Format = ReportFormat::Tsv;
    $report->ReportName = 'My Audience Performance Report';
    $report->ReturnOnlyCompleteData = false;
    $report->Aggregation = ReportAggregation::Daily;
    
    $report->Scope = new AccountThroughAdGroupReportScope();
    $report->Scope->AccountIds = array();
    $report->Scope->AccountIds[] = $accountId;
    $report->Scope->AdGroups = null;
    $report->Scope->Campaigns = null;
    
    $report->Time = new ReportTime();
    $report->Time->PredefinedTime = ReportTimePeriod::Yesterday;
    
    $report->Columns = array (
            AudiencePerformanceReportColumn::TimePeriod,
            AudiencePerformanceReportColumn::AccountId,
            AudiencePerformanceReportColumn::CampaignId,
            AudiencePerformanceReportColumn::AudienceId,
            AudiencePerformanceReportColumn::Clicks,
            AudiencePerformanceReportColumn::Impressions,
            AudiencePerformanceReportColumn::Ctr,
            AudiencePerformanceReportColumn::AverageCpc,
            AudiencePerformanceReportColumn::Spend,
    );
    
    $encodedReport = new SoapVar(
        $report, 
        SOAP_ENC_OBJECT, 
        'AudiencePerformanceReportRequest', 
        $GLOBALS['ReportingProxy']->GetNamespace()
    );
    
    return $encodedReport;
}
