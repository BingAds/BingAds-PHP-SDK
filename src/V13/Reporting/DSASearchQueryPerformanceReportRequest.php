<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a DSA search query performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dsasearchqueryperformancereportrequest?view=bingads-13 DSASearchQueryPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses DSASearchQueryPerformanceReportColumn
     * @uses DSASearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DSASearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
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
