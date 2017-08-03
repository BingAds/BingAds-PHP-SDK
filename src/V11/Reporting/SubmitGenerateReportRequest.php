<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Submits a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.110).aspx SubmitGenerateReport Request Object
     * 
     * @uses ReportRequest
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportRequest
    {
        /**
         * The report request.
         * @var ReportRequest
         */
        public $ReportRequest;
    }
}
