<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an account performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/accountperformancereportrequest?view=bingads-13 AccountPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AccountPerformanceReportColumn
     * @uses AccountPerformanceReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class AccountPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AccountPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AccountPerformanceReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
