<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Submits a report request.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/submitgeneratereport?view=bingads-13 SubmitGenerateReport Response Object
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
