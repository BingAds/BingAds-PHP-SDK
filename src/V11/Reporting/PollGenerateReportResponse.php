<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.110).aspx PollGenerateReport Response Object
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
