<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Submits a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.90).aspx SubmitGenerateReport Response Object
     * 
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportResponse
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
