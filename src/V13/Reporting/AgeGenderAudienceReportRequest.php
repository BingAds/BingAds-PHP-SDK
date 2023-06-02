<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an age and gender audience report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/agegenderaudiencereportrequest?view=bingads-13 AgeGenderAudienceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AgeGenderAudienceReportColumn
     * @uses AgeGenderAudienceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AgeGenderAudienceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
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
