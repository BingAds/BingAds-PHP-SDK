<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a product partition performance report request that aggregates the performance data by product group and product partition type for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/dn913138(v=msads.110).aspx ProductPartitionPerformanceReportRequest Data Object
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
