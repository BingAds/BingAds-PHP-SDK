<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a product target performance report request.
     * @link http://msdn.microsoft.com/en-us/library/dn195846(v=msads.90).aspx ProductTargetPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductTargetPerformanceReportColumn
     * @uses ProductTargetPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductTargetPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
