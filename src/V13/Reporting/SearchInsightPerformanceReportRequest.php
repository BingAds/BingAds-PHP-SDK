<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for SearchInsightPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchinsightperformancereportrequest?view=bingads-13 SearchInsightPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses SearchInsightPerformanceReportColumn
     * @uses SearchInsightPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class SearchInsightPerformanceReportRequest extends ReportRequest
    {
        /**
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var SearchInsightPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var SearchInsightPerformanceReportFilter
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
