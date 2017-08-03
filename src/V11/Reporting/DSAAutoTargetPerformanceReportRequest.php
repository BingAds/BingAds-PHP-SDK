<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a DSA auto target performance report request.
     * @link http://msdn.microsoft.com/en-us/library/mt779098(v=msads.110).aspx DSAAutoTargetPerformanceReportRequest Data Object
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
