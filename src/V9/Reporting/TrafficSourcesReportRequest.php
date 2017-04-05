<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a traffic sources report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262853(v=msads.90).aspx TrafficSourcesReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses TrafficSourcesReportColumn
     * @uses TrafficSourcesReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class TrafficSourcesReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
