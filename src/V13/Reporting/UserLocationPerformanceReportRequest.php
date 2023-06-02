<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a user location performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/userlocationperformancereportrequest?view=bingads-13 UserLocationPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses UserLocationPerformanceReportColumn
     * @uses UserLocationPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class UserLocationPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var UserLocationPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var UserLocationPerformanceReportFilter
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
