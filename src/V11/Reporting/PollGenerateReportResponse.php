<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/pollgeneratereport?view=bingads-11 PollGenerateReport Response Object
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
