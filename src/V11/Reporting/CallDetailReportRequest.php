<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a call detail report request.
     * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.110).aspx CallDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CallDetailReportColumn
     * @uses CallDetailReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class CallDetailReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
