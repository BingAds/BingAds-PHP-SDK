<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a product partition unit performance report request that aggregates the performance data by product partition unit for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt592960(v=msads.110).aspx ProductPartitionUnitPerformanceReportRequest Data Object
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
