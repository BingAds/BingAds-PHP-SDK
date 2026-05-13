<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/mmmperformancereportrequest?view=bingads-13 MMMPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses MMMPerformanceReportColumn
     * @uses MMMPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class MMMPerformanceReportRequest extends ReportRequest
    {
        /**
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var MMMPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var MMMPerformanceReportFilter
         */
        public $Filter;

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
