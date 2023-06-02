<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a keyword performance report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/keywordperformancereportrequest?view=bingads-13 KeywordPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses KeywordPerformanceReportColumn
     * @uses KeywordPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses KeywordPerformanceReportSort
     * @uses ReportTime
     */
    final class KeywordPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var KeywordPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var KeywordPerformanceReportFilter
         */
        public $Filter;

        /**
         * The top number of data rows to return in the report.
         * @var integer
         */
        public $MaxRows;

        /**
         * The entity scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * A list of the columns to sort, and the corresponding sort order.
         * @var KeywordPerformanceReportSort[]
         */
        public $Sort;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
