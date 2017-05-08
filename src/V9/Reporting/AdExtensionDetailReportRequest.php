<?php
// Generated on 5/7/2017 5:45:55 AM

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
