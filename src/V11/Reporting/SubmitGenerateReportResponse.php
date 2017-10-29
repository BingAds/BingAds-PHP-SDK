<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Submits a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/submitgeneratereport?version=11 SubmitGenerateReport Response Object
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
