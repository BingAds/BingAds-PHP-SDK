<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a hotel dimension performance report request that aggregates the performance data by product category, custom label, title, and type for a specified time period.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/hoteldimensionperformancereportrequest?view=bingads-13 HotelDimensionPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses HotelDimensionPerformanceReportColumn
     * @uses HotelDimensionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class HotelDimensionPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var HotelDimensionPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var HotelDimensionPerformanceReportFilter
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
