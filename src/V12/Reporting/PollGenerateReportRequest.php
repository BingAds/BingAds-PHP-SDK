<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/pollgeneratereport?view=bingads-12 PollGenerateReport Request Object
     * 
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportRequest
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
