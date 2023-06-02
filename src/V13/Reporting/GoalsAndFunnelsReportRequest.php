<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a goals and funnels report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/goalsandfunnelsreportrequest?view=bingads-13 GoalsAndFunnelsReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses GoalsAndFunnelsReportColumn
     * @uses GoalsAndFunnelsReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GoalsAndFunnelsReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var GoalsAndFunnelsReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var GoalsAndFunnelsReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
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
