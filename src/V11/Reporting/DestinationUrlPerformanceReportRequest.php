<?php
// Generated on 6/7/2017 5:55:20 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a destination URL performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671480(v=msads.110).aspx DestinationUrlPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses DestinationUrlPerformanceReportColumn
     * @uses DestinationUrlPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DestinationUrlPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
