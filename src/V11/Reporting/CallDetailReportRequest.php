<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a call detail report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/calldetailreportrequest?version=11 CallDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CallDetailReportColumn
     * @uses CallDetailReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class CallDetailReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var CallDetailReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CallDetailReportFilter
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
