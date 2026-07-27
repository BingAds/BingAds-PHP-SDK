<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a marketing mix modeling (MMM) performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/mmmperformancereportrequest?view=bingads-13 MMMPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses MMMPerformanceReportColumn
     * @uses MMMPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class MMMPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var MMMPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var MMMPerformanceReportFilter
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
