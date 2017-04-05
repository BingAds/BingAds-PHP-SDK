<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines an ad extension by keyword report request.
     * @link http://msdn.microsoft.com/en-us/library/jj713605(v=msads.90).aspx AdExtensionByKeywordReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByKeywordReportColumn
     * @uses AdExtensionByKeywordReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByKeywordReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
