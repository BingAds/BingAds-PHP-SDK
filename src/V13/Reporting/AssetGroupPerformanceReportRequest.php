<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var AssetGroupPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var AssetGroupPerformanceReportFilter
         */
        public $Filter;

        /**
         * Reserved.
         * @var AccountThroughAssetGroupReportScope
         */
        public $Scope;

        /**
         * Reserved.
         * @var ReportTime
         */
        public $Time;
    }

}
