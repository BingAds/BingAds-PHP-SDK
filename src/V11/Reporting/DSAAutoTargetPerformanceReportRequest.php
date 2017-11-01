<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a DSA auto target performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/dsaautotargetperformancereportrequest?view=bingads-11 DSAAutoTargetPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses DSAAutoTargetPerformanceReportColumn
     * @uses DSAAutoTargetPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DSAAutoTargetPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var DSAAutoTargetPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DSAAutoTargetPerformanceReportFilter
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
