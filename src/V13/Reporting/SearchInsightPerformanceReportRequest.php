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
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var SearchInsightPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SearchInsightPerformanceReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
