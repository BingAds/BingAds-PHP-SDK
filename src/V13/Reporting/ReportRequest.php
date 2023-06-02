<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the base object for all report requests.
     * @link https:/learn.microsoft.com/advertising/reporting-service/reportrequest?view=bingads-13 ReportRequest Data Object
     * 
     * @uses ReportFormat
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
         * Determines whether or not the downloaded report should contain footer metadata such as Microsoft copyright (@2020 Microsoft Corporation.
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
         * Determines the format for certain fields in the downloaded report file.
         * @var string
         */
        public $FormatVersion;

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
