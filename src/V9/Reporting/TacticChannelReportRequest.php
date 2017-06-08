<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a tactic and channel report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262842(v=msads.90).aspx TacticChannelReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses TacticChannelReportColumn
     * @uses TacticChannelReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class TacticChannelReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
