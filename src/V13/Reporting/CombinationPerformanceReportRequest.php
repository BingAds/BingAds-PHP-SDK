<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a combination performance report request.
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
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var CombinationPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CombinationPerformanceReportFilter
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
