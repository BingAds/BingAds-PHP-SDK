<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an ad performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/adperformancereportrequest?view=bingads-11 AdPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AdPerformanceReportColumn
     * @uses AdPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdPerformanceReportFilter
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
