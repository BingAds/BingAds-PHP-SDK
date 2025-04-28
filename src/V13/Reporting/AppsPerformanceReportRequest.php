<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var AppsPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var AppsPerformanceReportFilter
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
