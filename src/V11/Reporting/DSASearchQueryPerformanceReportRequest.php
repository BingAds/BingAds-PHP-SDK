<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a DSA search query performance report request.
     * @link http://msdn.microsoft.com/en-us/library/mt779097(v=msads.110).aspx DSASearchQueryPerformanceReportRequest Data Object
     * 
     * @uses SearchQueryReportAggregation
     * @uses DSASearchQueryPerformanceReportColumn
     * @uses DSASearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DSASearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var SearchQueryReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var DSASearchQueryPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DSASearchQueryPerformanceReportFilter
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
