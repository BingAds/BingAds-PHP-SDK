<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a product offer performance report request that aggregates the performance data by product offer for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/dn743719(v=msads.90).aspx ProductOfferPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductOfferPerformanceReportColumn
     * @uses ProductOfferPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductOfferPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
