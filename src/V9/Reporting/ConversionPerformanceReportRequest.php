<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a conversion performance report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262843(v=msads.90).aspx ConversionPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses ConversionPerformanceReportColumn
     * @uses ConversionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ConversionPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
