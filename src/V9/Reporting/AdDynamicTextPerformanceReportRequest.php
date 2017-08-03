<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines an ad dynamic text performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671950(v=msads.90).aspx AdDynamicTextPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AdDynamicTextPerformanceReportColumn
     * @uses AdDynamicTextPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdDynamicTextPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
