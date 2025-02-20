<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/combinationperformancereportrequest?view=bingads-13 CombinationPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CombinationPerformanceReportColumn
     * @uses CombinationPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class CombinationPerformanceReportRequest extends ReportRequest
    {
        /**
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var CombinationPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var CombinationPerformanceReportFilter
         */
        public $Filter;

        /**
         * Reserved.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * Reserved.
         * @var ReportTime
         */
        public $Time;
    }

}
