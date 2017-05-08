<?php
// Generated on 5/7/2017 5:45:55 AM

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
