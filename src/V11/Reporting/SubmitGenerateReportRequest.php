<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Submits a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/submitgeneratereport?version=11 SubmitGenerateReport Request Object
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
