<?php
// Generated on 12/5/2016 5:47:09 AM

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
