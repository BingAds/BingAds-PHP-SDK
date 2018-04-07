<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an age and gender audience report request for Audience campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/agegenderaudiencereportrequest?view=bingads-11 AgeGenderAudienceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AgeGenderAudienceReportColumn
     * @uses AgeGenderAudienceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AgeGenderAudienceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AgeGenderAudienceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AgeGenderAudienceReportFilter
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
