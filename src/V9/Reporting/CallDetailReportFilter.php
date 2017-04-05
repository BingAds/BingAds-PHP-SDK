<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the criteria to use to filter the call detail report data.
     * @link http://msdn.microsoft.com/en-us/library/mt489831(v=msads.90).aspx CallDetailReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by CallDetailReportRequest
     */
    final class CallDetailReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;
    }

}
