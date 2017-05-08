<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a rich ad performance report request.
     * @link http://msdn.microsoft.com/en-us/library/hh180150(v=msads.90).aspx RichAdComponentPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses RichAdComponentPerformanceReportColumn
     * @uses RichAdComponentPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class RichAdComponentPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
