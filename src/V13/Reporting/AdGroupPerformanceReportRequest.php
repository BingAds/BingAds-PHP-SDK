<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an ad group performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adgroupperformancereportrequest?view=bingads-13 AdGroupPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdGroupPerformanceReportColumn
     * @uses AdGroupPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdGroupPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdGroupPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdGroupPerformanceReportFilter
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
