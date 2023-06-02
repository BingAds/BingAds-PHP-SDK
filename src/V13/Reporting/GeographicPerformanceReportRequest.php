<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a geographic performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/geographicperformancereportrequest?view=bingads-13 GeographicPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses GeographicPerformanceReportColumn
     * @uses GeographicPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GeographicPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var GeographicPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var GeographicPerformanceReportFilter
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
