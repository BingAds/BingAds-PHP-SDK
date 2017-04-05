<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a change history report request.
     * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.90).aspx SearchCampaignChangeHistoryReportRequest Data Object
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
