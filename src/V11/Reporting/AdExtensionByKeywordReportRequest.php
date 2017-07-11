<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an ad extension by keyword report request.
     * @link http://msdn.microsoft.com/en-us/library/jj713605(v=msads.110).aspx AdExtensionByKeywordReportRequest Data Object
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
