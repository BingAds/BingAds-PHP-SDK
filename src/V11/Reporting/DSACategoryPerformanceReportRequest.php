<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a DSA category performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/dsacategoryperformancereportrequest?view=bingads-11 DSACategoryPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses DSACategoryPerformanceReportColumn
     * @uses DSACategoryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DSACategoryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var DSACategoryPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DSACategoryPerformanceReportFilter
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
