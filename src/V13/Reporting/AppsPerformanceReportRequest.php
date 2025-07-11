<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an app campaign performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/appsperformancereportrequest?view=bingads-13 AppsPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AppsPerformanceReportColumn
     * @uses AppsPerformanceReportFilter
     * @uses AccountThroughAssetGroupReportScope
     * @uses ReportTime
     */
    final class AppsPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AppsPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AppsPerformanceReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountThroughAssetGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
