<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a change history report request.
     * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.110).aspx SearchCampaignChangeHistoryReportRequest Data Object
     * 
     * @uses SearchCampaignChangeHistoryReportColumn
     * @uses SearchCampaignChangeHistoryReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
    {
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
