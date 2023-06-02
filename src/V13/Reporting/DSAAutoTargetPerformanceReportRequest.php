<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a DSA auto target performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dsaautotargetperformancereportrequest?view=bingads-13 DSAAutoTargetPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses DSAAutoTargetPerformanceReportColumn
     * @uses DSAAutoTargetPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DSAAutoTargetPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
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
