<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an ad extension by keyword report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adextensionbykeywordreportrequest?view=bingads-13 AdExtensionByKeywordReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByKeywordReportColumn
     * @uses AdExtensionByKeywordReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByKeywordReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdExtensionByKeywordReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionByKeywordReportFilter
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
