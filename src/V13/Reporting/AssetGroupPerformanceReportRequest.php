<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for AssetGroupPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetgroupperformancereportrequest?view=bingads-13 AssetGroupPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AssetGroupPerformanceReportColumn
     * @uses AssetGroupPerformanceReportFilter
     * @uses AccountThroughAssetGroupReportScope
     * @uses ReportTime
     */
    final class AssetGroupPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AssetGroupPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AssetGroupPerformanceReportFilter
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
