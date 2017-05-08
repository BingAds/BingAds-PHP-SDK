<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.110).aspx ReportRequestStatus Data Object
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
