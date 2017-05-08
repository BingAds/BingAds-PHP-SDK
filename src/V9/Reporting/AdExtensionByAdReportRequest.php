<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines an ad extension by ad report request.
     * @link http://msdn.microsoft.com/en-us/library/jj713606(v=msads.90).aspx AdExtensionByAdReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByAdReportColumn
     * @uses AdExtensionByAdReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByAdReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
