<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the criteria to use to filter the tactic and channel report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262855(v=msads.90).aspx TacticChannelReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses KeywordStatusReportFilter
     * @used-by TacticChannelReportRequest
     */
    final class TacticChannelReportFilter
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

        /**
         * The report will include data for only the specified channels.
         * @var integer[]
         */
        public $ChannelIds;

        /**
         * The report will include data for only the keyword status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;

        /**
         * The report will include data for only the specified tactics.
         * @var integer[]
         */
        public $TacticIds;

        /**
         * The report will include data for only the specified ad groups.
         * @var integer[]
         */
        public $ThirdPartyAdGroupIds;

        /**
         * The report will include data for only the specified campaigns.
         * @var integer[]
         */
        public $ThirdPartyCampaignIds;
    }

}
