<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the BingAds\Reporting classes that will be used.
use Microsoft\BingAds\v9\Reporting\SubmitGenerateReportRequest;
use Microsoft\BingAds\v9\Reporting\AccountPerformanceReportRequest;
use Microsoft\BingAds\v9\Reporting\AudiencePerformanceReportRequest;
use Microsoft\BingAds\v9\Reporting\KeywordPerformanceReportRequest;
use Microsoft\BingAds\v9\Reporting\ReportFormat;
use Microsoft\BingAds\v9\Reporting\ReportAggregation;
use Microsoft\BingAds\v9\Reporting\AccountThroughAdGroupReportScope;
use Microsoft\BingAds\v9\Reporting\CampaignReportScope;
use Microsoft\BingAds\v9\Reporting\AccountReportScope;
use Microsoft\BingAds\v9\Reporting\ReportTime;
use Microsoft\BingAds\v9\Reporting\ReportTimePeriod;
use Microsoft\BingAds\v9\Reporting\Date;
use Microsoft\BingAds\v9\Reporting\AccountPerformanceReportFilter;
use Microsoft\BingAds\v9\Reporting\KeywordPerformanceReportFilter;
use Microsoft\BingAds\v9\Reporting\DeviceTypeReportFilter;
use Microsoft\BingAds\v9\Reporting\AccountPerformanceReportColumn;
use Microsoft\BingAds\v9\Reporting\AudiencePerformanceReportColumn;
use Microsoft\BingAds\v9\Reporting\KeywordPerformanceReportColumn;
use Microsoft\BingAds\v9\Reporting\PollGenerateReportRequest;
use Microsoft\BingAds\v9\Reporting\ReportRequestStatusType;
use Microsoft\BingAds\v9\Reporting\KeywordPerformanceReportSort;
use Microsoft\BingAds\v9\Reporting\SortOrder;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

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
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['ReportingProxy'] = new ServiceClient(ServiceClientType::ReportingVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // You can submit one of the example reports, or build your own.
    $report = GetAccountPerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    //$report = GetAudiencePerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    //$report = GetKeywordPerformanceReportRequest($GLOBALS['AuthorizationData']->AccountId);
    
    // SubmitGenerateReport helper method calls the corresponding Bing Ads service operation
    // to request the report identifier. The identifier is used to check report generation status
    // before downloading the report.
    
    $reportRequestId = SubmitGenerateReport($report);
    
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
    	
    	$reportRequestStatus = PollGenerateReport($reportRequestId);
    
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
    		printf("Downloading from %s.\n\n", $reportDownloadUrl);
    		DownloadFile($reportDownloadUrl, $DownloadPath);
    		printf("The report was written to %s.\n", $DownloadPath);
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
    // Output the last request/response.

	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	 
	// Reporting service operations can throw AdApiFaultDetail.
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
				case 0:    // InternalError
					break;
				case 105:  // InvalidCredentials
					break;
				default:
					print "Please see MSDN documentation for more details about the error code output above.\n";
					break;
			}
		}
	}

	// Reporting service operations can throw ApiFaultDetail.
	elseif (isset($e->detail->ApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		// If the BatchError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->BatchErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
			? $e->detail->ApiFaultDetail->BatchErrors->BatchError
			: array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

			foreach ($errors as $error)
			{
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:     // InternalError
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the OperationError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->OperationErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
			? $e->detail->ApiFaultDetail->OperationErrors->OperationError
			: array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

			foreach ($errors as $error)
			{
				print "OperationError\n";
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:     // InternalError
						break;
					case 106:   // UserIsNotAuthorized
						break;
					case 2100:  // ReportingServiceInvalidReportId
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
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

// Gets a User object by the specified UserId.

function GetUser($userId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
}

// Searches by UserId for accounts that the user can manage.

function SearchAccountsByUserId($userId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $userId; 

    $request = new SearchAccountsRequest();
    $request->Ordering = null;
    $request->PageInfo = $pageInfo;
    $request->Predicates = array($predicate);

    return $GLOBALS['Proxy']->GetService()->SearchAccounts($request)->Accounts;
}

// Request the report. Use the ID that the request returns to
// check for the completion of the report.

function SubmitGenerateReport($report)
{
    $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy']; 

    $request = new SubmitGenerateReportRequest();
    $request->ReportRequest = $report;

    return $GLOBALS['ReportingProxy']->GetService()->SubmitGenerateReport($request)->ReportRequestId;
}

// Check the status of the report request. The guidance of how often to poll
// for status is from every five to 15 minutes depending on the amount
// of data being requested. For smaller reports, you can poll every couple
// of minutes. You should stop polling and try again later if the request
// is taking longer than an hour.

function PollGenerateReport($reportRequestId)
{
    $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy']; 

    $request = new PollGenerateReportRequest();
    $request->ReportRequestId = $reportRequestId;

    return $GLOBALS['ReportingProxy']->GetService()->PollGenerateReport($request)->ReportRequestStatus;
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
    
    //  You may either use a custom date range or predefined time.
    //  date_default_timezone_set('UTC');
    //  $LastYear = date("Y") - 1;
    //   $report->Time->CustomDateRangeStart = new Date();
    //  $report->Time->CustomDateRangeStart->Month = 1;
    //  $report->Time->CustomDateRangeStart->Day = 1;
    //  $report->Time->CustomDateRangeStart->Year = $LastYear;
    //  $report->Time->CustomDateRangeEnd = new Date();
    //  $report->Time->CustomDateRangeEnd->Month = 12;
    //  $report->Time->CustomDateRangeEnd->Day = 31;
    //  $report->Time->CustomDateRangeEnd->Year = $LastYear;
    
    //  If you specify a filter, results may differ from data you see in the Bing Ads web application
    //  $report->Filter = new KeywordPerformanceReportFilter();
    //  $report->Filter->DeviceType = array (
    //      DeviceTypeReportFilter::Computer,
    //      DeviceTypeReportFilter::SmartPhone
    //  );
    
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
    
    // You may optionally sort by any KeywordPerformanceReportColumn, and optionally
    // specify the maximum number of rows to return in the sorted report.
    
    $report->Sort = array ();
    $keywordPerformanceReportSort = new KeywordPerformanceReportSort();
    $keywordPerformanceReportSort->SortColumn = KeywordPerformanceReportColumn::Clicks;
    $keywordPerformanceReportSort->SortOrder = SortOrder::Ascending;
    $report->Sort[] = $keywordPerformanceReportSort;
    
    $report->MaxRows = 10;
    
    $encodedReport = new SoapVar($report, SOAP_ENC_OBJECT, 'KeywordPerformanceReportRequest', $GLOBALS['ReportingProxy']->GetNamespace());

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
    
    //  You may either use a custom date range or predefined time.
    //  date_default_timezone_set('UTC');
    //  $LastYear = date("Y") - 1;
    //   $report->Time->CustomDateRangeStart = new Date();
    //  $report->Time->CustomDateRangeStart->Month = 1;
    //  $report->Time->CustomDateRangeStart->Day = 1;
    //  $report->Time->CustomDateRangeStart->Year = $LastYear;
    //  $report->Time->CustomDateRangeEnd = new Date();
    //  $report->Time->CustomDateRangeEnd->Month = 12;
    //  $report->Time->CustomDateRangeEnd->Day = 31;
    //  $report->Time->CustomDateRangeEnd->Year = $LastYear;
    
    //  If you specify a filter, results may differ from data you see in the Bing Ads web application
    //  $report->Filter = new AccountPerformanceReportFilter();
    //  $report->Filter->DeviceType = array (
    //      DeviceTypeReportFilter::Computer,
    //      DeviceTypeReportFilter::SmartPhone
    //  );

    $report->Columns = array (
    		AccountPerformanceReportColumn::TimePeriod,
    		AccountPerformanceReportColumn::AccountId,
    		AccountPerformanceReportColumn::AccountName,
    		AccountPerformanceReportColumn::Clicks,
    		AccountPerformanceReportColumn::Impressions,
    		AccountPerformanceReportColumn::Ctr,
    		AccountPerformanceReportColumn::AverageCpc,
    		AccountPerformanceReportColumn::Spend,
    );
    
    $encodedReport = new SoapVar($report, SOAP_ENC_OBJECT, 'AccountPerformanceReportRequest', $GLOBALS['ReportingProxy']->GetNamespace());
    
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
    
    //  You may either use a custom date range or predefined time.
    //  date_default_timezone_set('UTC');
    //  $LastYear = date("Y") - 1;
    //   $report->Time->CustomDateRangeStart = new Date();
    //  $report->Time->CustomDateRangeStart->Month = 1;
    //  $report->Time->CustomDateRangeStart->Day = 1;
    //  $report->Time->CustomDateRangeStart->Year = $LastYear;
    //  $report->Time->CustomDateRangeEnd = new Date();
    //  $report->Time->CustomDateRangeEnd->Month = 12;
    //  $report->Time->CustomDateRangeEnd->Day = 31;
    //  $report->Time->CustomDateRangeEnd->Year = $LastYear;
    
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
    
    $encodedReport = new SoapVar($report, SOAP_ENC_OBJECT, 'AudiencePerformanceReportRequest', $GLOBALS['ReportingProxy']->GetNamespace());
    
    return $encodedReport;
}
 
?>