<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a product partition performance report request that aggregates the performance data by product group and product partition type for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/dn913138(v=msads.90).aspx ProductPartitionPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductPartitionPerformanceReportColumn
     * @uses ProductPartitionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductPartitionPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
