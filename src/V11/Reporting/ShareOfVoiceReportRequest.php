<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a share of voice (SOV) report request.
     * @link http://msdn.microsoft.com/en-us/library/jj592909(v=msads.110).aspx ShareOfVoiceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses ShareOfVoiceReportColumn
     * @uses ShareOfVoiceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ShareOfVoiceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
