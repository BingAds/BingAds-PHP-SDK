<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a call detail report request.
     * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.90).aspx CallDetailReportRequest Data Object
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
