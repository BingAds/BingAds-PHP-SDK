<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the status of a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportrequeststatus?view=bingads-11 ReportRequestStatus Data Object
     * 
     * @uses ReportRequestStatusType
     * @used-by PollGenerateReportResponse
     */
    final class ReportRequestStatus
    {
        /**
         * The URL from where the report can be downloaded.
         * @var string
         */
        public $ReportDownloadUrl;

        /**
         * The status of a report request.
         * @var ReportRequestStatusType
         */
        public $Status;
    }

}
