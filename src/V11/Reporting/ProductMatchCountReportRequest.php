<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a product match count report request that aggregates the performance data by product group for a specified time period.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/productmatchcountreportrequest?view=bingads-11 ProductMatchCountReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductMatchCountReportColumn
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductMatchCountReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ProductMatchCountReportColumn[]
         */
        public $Columns;

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
