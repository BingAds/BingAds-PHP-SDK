<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Submits a report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/submitgeneratereport?view=bingads-13 SubmitGenerateReport Request Object
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
