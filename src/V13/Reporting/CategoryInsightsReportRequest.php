<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a category insights report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryinsightsreportrequest?view=bingads-13 CategoryInsightsReportRequest Data Object
     * 
     * @uses CategoryInsightsReportColumn
     * @uses CategoryInsightsReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class CategoryInsightsReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var CategoryInsightsReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CategoryInsightsReportFilter
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
