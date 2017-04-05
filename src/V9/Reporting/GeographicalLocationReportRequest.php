<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * The GeographicalLocationReportRequest and corresponding programming elements are deprecated, and instead you should use the GeoLocationPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn393955(v=msads.90).aspx GeographicalLocationReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses GeographicalLocationReportColumn
     * @uses GeographicalLocationReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GeographicalLocationReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
