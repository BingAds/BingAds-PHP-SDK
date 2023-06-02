<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an ad dynamic text performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/addynamictextperformancereportrequest?view=bingads-13 AdDynamicTextPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdDynamicTextPerformanceReportColumn
     * @uses AdDynamicTextPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdDynamicTextPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdDynamicTextPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdDynamicTextPerformanceReportFilter
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
