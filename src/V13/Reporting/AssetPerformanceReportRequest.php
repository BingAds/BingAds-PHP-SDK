<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var AssetPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * Reserved.
         * @var ReportTime
         */
        public $Time;
    }

}
