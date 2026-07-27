<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an MSClickID performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/msclickidperformancereportrequest?view=bingads-13 MSClickIdPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses MSClickIdPerformanceReportColumn
     * @uses MSClickIdPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class MSClickIdPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var MSClickIdPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var MSClickIdPerformanceReportFilter
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
