<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a search query performance report request.
     * @link http://msdn.microsoft.com/en-us/library/ee703962(v=msads.90).aspx SearchQueryPerformanceReportRequest Data Object
     * 
     * @uses SearchQueryReportAggregation
     * @uses SearchQueryPerformanceReportColumn
     * @uses SearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var SearchQueryReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var SearchQueryPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SearchQueryPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
