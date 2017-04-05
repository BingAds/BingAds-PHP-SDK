<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a keyword performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671816(v=msads.90).aspx KeywordPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses KeywordPerformanceReportColumn
     * @uses KeywordPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses KeywordPerformanceReportSort
     * @uses ReportTime
     */
    final class KeywordPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $MaxRows;
        public $Scope;
        public $Sort;
        public $Time;
    }

}
