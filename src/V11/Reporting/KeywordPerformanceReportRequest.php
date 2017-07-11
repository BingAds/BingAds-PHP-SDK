<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a keyword performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671816(v=msads.110).aspx KeywordPerformanceReportRequest Data Object
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
