<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for AssetPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetperformancereportrequest?view=bingads-13 AssetPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AssetPerformanceReportColumn
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AssetPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AssetPerformanceReportColumn[]
         */
        public $Columns;

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
