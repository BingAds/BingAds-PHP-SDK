<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines a professional demographics audience report request for Audience campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/professionaldemographicsaudiencereportrequest?view=bingads-12 ProfessionalDemographicsAudienceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProfessionalDemographicsAudienceReportColumn
     * @uses ProfessionalDemographicsAudienceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProfessionalDemographicsAudienceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ProfessionalDemographicsAudienceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ProfessionalDemographicsAudienceReportFilter
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
