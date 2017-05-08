<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an audience performance report request.
     * @link http://msdn.microsoft.com/en-us/library/mt604702(v=msads.110).aspx AudiencePerformanceReportRequest Data Object
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
