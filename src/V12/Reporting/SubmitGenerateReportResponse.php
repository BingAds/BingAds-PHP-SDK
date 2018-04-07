<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Submits a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/submitgeneratereport?view=bingads-12 SubmitGenerateReport Response Object
     * 
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportResponse
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
