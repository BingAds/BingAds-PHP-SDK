<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines an ad extension detail report request.
     * @link http://msdn.microsoft.com/en-us/library/dn610364(v=msads.90).aspx AdExtensionDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionDetailReportColumn
     * @uses AdExtensionDetailReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionDetailReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
