<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines an account performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671927(v=msads.90).aspx AccountPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AccountPerformanceReportColumn
     * @uses AccountPerformanceReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class AccountPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AccountPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AccountPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
