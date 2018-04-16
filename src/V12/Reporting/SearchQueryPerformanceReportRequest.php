<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines a search query performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/searchqueryperformancereportrequest?view=bingads-12 SearchQueryPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses SearchQueryPerformanceReportColumn
     * @uses SearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
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
         * The entity scope of the report.
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
