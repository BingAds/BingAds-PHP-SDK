<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a travel query insight report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/travelqueryinsightreportrequest?view=bingads-13 TravelQueryInsightReportRequest Data Object
     * 
     * @uses TravelQueryInsightReportColumn
     * @uses TravelQueryInsightReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class TravelQueryInsightReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var TravelQueryInsightReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var TravelQueryInsightReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
