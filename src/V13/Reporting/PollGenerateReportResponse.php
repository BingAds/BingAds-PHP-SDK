<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/pollgeneratereport?view=bingads-13 PollGenerateReport Response Object
     * 
     * @uses ReportRequestStatus
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportResponse
    {
        /**
         * Contains the status of the report request and the download URL.
         * @var ReportRequestStatus
         */
        public $ReportRequestStatus;
    }
}
