<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the base object for all report requests.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportrequest?view=bingads-12 ReportRequest Data Object
     * 
     * @uses ReportFormat
     * @uses ReportLanguage
     * @used-by SubmitGenerateReportRequest
     */
    class ReportRequest
    {
        /**
         * Determines whether or not the downloaded report should contain header descriptions for each column.
         * @var boolean
         */
        public $ExcludeColumnHeaders;

        /**
         * Determines whether or not the downloaded report should contain footer metadata such as Microsoft copyright (@2019 Microsoft Corporation.
         * @var boolean
         */
        public $ExcludeReportFooter;

        /**
         * Determines whether or not the downloaded report should contain header metadata such as report name, date range, and aggregation.
         * @var boolean
         */
        public $ExcludeReportHeader;

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
         * Determines whether or not the service must ensure that all the data has been processed and is available.
         * @var boolean
         */
        public $ReturnOnlyCompleteData;
    }

}
