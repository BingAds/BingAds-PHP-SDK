<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines an age and gender demographic report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/agegenderdemographicreportrequest?view=bingads-12 AgeGenderDemographicReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AgeGenderDemographicReportColumn
     * @uses AgeGenderDemographicReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AgeGenderDemographicReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AgeGenderDemographicReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AgeGenderDemographicReportFilter
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
