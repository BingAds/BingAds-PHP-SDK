<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a hotel group performance report request that aggregates the performance data by product category, custom label, title, and type for a specified time period.
     * @link https:/learn.microsoft.com/advertising/reporting-service/hotelgroupperformancereportrequest?view=bingads-13 HotelGroupPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses HotelGroupPerformanceReportColumn
     * @uses HotelGroupPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class HotelGroupPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var HotelGroupPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var HotelGroupPerformanceReportFilter
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
