<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a product partition unit performance report request that aggregates the performance data by product partition unit for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt592960(v=msads.90).aspx ProductPartitionUnitPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductPartitionUnitPerformanceReportColumn
     * @uses ProductPartitionUnitPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductPartitionUnitPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
