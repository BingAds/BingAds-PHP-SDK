<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a share of voice (SOV) report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/shareofvoicereportrequest?view=bingads-11 ShareOfVoiceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses ShareOfVoiceReportColumn
     * @uses ShareOfVoiceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ShareOfVoiceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ShareOfVoiceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ShareOfVoiceReportFilter
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
