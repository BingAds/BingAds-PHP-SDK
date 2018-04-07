<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Submits a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/submitgeneratereport?view=bingads-12 SubmitGenerateReport Request Object
     * 
     * @uses ReportRequest
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportRequest
    {
        /**
         * The report request.
         * @var ReportRequest
         */
        public $ReportRequest;
    }
}
