<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a destination URL performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671480(v=msads.90).aspx DestinationUrlPerformanceReportRequest Data Object
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
