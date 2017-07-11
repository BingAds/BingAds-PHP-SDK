<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a conversion performance report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262843(v=msads.110).aspx ConversionPerformanceReportRequest Data Object
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
