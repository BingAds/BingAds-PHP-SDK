<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a destination URL performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/destinationurlperformancereportrequest?view=bingads-11 DestinationUrlPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses DestinationUrlPerformanceReportColumn
     * @uses DestinationUrlPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DestinationUrlPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var DestinationUrlPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DestinationUrlPerformanceReportFilter
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
