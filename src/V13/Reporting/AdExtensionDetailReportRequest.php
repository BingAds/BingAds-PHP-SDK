<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines an ad extension detail report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adextensiondetailreportrequest?view=bingads-13 AdExtensionDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionDetailReportColumn
     * @uses AdExtensionDetailReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionDetailReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdExtensionDetailReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionDetailReportFilter
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
