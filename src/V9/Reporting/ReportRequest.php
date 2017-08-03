<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the base object for all report requests.
     * @link http://msdn.microsoft.com/en-us/library/bb671813(v=msads.90).aspx ReportRequest Data Object
     * 
     * @uses ReportFormat
     * @uses ReportLanguage
     * @used-by SubmitGenerateReportRequest
     */
    class ReportRequest
    {
        /**
         * The format of the report data.
         * @var ReportFormat
         */
        public $Format;

        /**
         * The language to use to generate the report headers and columns.
         * @var ReportLanguage
         */
        public $Language;

        /**
         * The name of the report.
         * @var string
         */
        public $ReportName;

        /**
         * Determines whether you want the service to generate the report only if all the data has been processed and is available.
         * @var boolean
         */
        public $ReturnOnlyCompleteData;
    }

}
