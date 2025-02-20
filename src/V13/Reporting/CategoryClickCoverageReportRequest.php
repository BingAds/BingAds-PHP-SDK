<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a category click coverage report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryclickcoveragereportrequest?view=bingads-13 CategoryClickCoverageReportRequest Data Object
     * 
     * @uses CategoryClickCoverageReportColumn
     * @uses CategoryClickCoverageReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class CategoryClickCoverageReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var CategoryClickCoverageReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CategoryClickCoverageReportFilter
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
