<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an audience performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/audienceperformancereportrequest?view=bingads-13 AudiencePerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AudiencePerformanceReportColumn
     * @uses AudiencePerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AudiencePerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AudiencePerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AudiencePerformanceReportFilter
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
