<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the status of a report request.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/reportrequeststatus?view=bingads-13 ReportRequestStatus Data Object
     * 
     * @uses ReportRequestStatusType
     * @used-by PollGenerateReportResponse
     */
    final class ReportRequestStatus
    {
        /**
         * The encoded URL from where the report can be downloaded.
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
