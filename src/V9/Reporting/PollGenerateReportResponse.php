<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.90).aspx PollGenerateReport Response Object
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
