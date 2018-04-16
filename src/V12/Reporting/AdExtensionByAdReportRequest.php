<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines an ad extension by ad report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/adextensionbyadreportrequest?view=bingads-12 AdExtensionByAdReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByAdReportColumn
     * @uses AdExtensionByAdReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByAdReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var AdExtensionByAdReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionByAdReportFilter
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
