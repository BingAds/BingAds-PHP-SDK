<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/pollgeneratereport?view=bingads-13 PollGenerateReport Request Object
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
