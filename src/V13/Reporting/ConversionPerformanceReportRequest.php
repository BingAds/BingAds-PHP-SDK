<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a conversion performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/conversionperformancereportrequest?view=bingads-13 ConversionPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ConversionPerformanceReportColumn
     * @uses ConversionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ConversionPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ConversionPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ConversionPerformanceReportFilter
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
