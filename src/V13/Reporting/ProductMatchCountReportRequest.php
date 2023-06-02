<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a product match count report request that aggregates the performance data by product group for a specified time period.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productmatchcountreportrequest?view=bingads-13 ProductMatchCountReportRequest Data Object
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
