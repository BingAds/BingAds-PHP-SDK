<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a product dimension performance report request that aggregates the performance data by product category, custom label, title, and type for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/dn913141(v=msads.90).aspx ProductDimensionPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductDimensionPerformanceReportColumn
     * @uses ProductDimensionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductDimensionPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
