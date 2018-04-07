<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\Reporting classes that will be used.
use Microsoft\BingAds\V12\Reporting\SubmitGenerateReportRequest;
use Microsoft\BingAds\V12\Reporting\PollGenerateReportRequest;
use Microsoft\BingAds\V12\Reporting\AccountPerformanceReportRequest;
use Microsoft\BingAds\V12\Reporting\AudiencePerformanceReportRequest;
use Microsoft\BingAds\V12\Reporting\KeywordPerformanceReportRequest;
use Microsoft\BingAds\V12\Reporting\ReportFormat;
use Microsoft\BingAds\V12\Reporting\ReportAggregation;
use Microsoft\BingAds\V12\Reporting\AccountThroughAdGroupReportScope;
use Microsoft\BingAds\V12\Reporting\CampaignReportScope;
use Microsoft\BingAds\V12\Reporting\AccountReportScope;
use Microsoft\BingAds\V12\Reporting\ReportTime;
use Microsoft\BingAds\V12\Reporting\ReportTimePeriod;
use Microsoft\BingAds\V12\Reporting\Date;
use Microsoft\BingAds\V12\Reporting\AccountPerformanceReportFilter;
use Microsoft\BingAds\V12\Reporting\KeywordPerformanceReportFilter;
use Microsoft\BingAds\V12\Reporting\DeviceTypeReportFilter;
use Microsoft\BingAds\V12\Reporting\AccountPerformanceReportColumn;
use Microsoft\BingAds\V12\Reporting\AudiencePerformanceReportColumn;
use Microsoft\BingAds\V12\Reporting\KeywordPerformanceReportColumn;
use Microsoft\BingAds\V12\Reporting\ReportRequestStatusType;
use Microsoft\BingAds\V12\Reporting\KeywordPerformanceReportSort;
use Microsoft\BingAds\V12\Reporting\SortOrder;

final class ReportRequestLibrary {

    static function SubmitGenerateReport($report)
    {
        $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy']; 

        $request = new SubmitGenerateReportRequest();
        $request->ReportRequest = $report;

        return $GLOBALS['ReportingProxy']->GetService()->SubmitGenerateReport($request);
    }

    static function PollGenerateReport($reportRequestId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy']; 

        $request = new PollGenerateReportRequest();
        $request->ReportRequestId = $reportRequestId;

        return $GLOBALS['ReportingProxy']->GetService()->PollGenerateReport($request);
    }

        
    static function GetKeywordPerformanceReportRequest($accountId) 
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

    static function GetAccountPerformanceReportRequest($accountId) 
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

    static function GetAudiencePerformanceReportRequest($accountId) 
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
 

}
