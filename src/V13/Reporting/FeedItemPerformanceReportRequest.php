<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a feed item performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/feeditemperformancereportrequest?view=bingads-13 FeedItemPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses FeedItemPerformanceReportColumn
     * @uses FeedItemPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class FeedItemPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var FeedItemPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var FeedItemPerformanceReportFilter
         */
        public $Filter;

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
