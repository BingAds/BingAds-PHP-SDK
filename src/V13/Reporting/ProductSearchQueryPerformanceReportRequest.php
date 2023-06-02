<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a Microsoft Shopping campaign product search query performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productsearchqueryperformancereportrequest?view=bingads-13 ProductSearchQueryPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductSearchQueryPerformanceReportColumn
     * @uses ProductSearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductSearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ProductSearchQueryPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ProductSearchQueryPerformanceReportFilter
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
