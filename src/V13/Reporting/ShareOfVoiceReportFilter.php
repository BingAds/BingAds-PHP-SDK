<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the share of voice report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/shareofvoicereportfilter?view=bingads-13 ShareOfVoiceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses BidMatchTypeReportFilter
     * @uses BidStrategyTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @uses KeywordStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by ShareOfVoiceReportRequest
     */
    final class ShareOfVoiceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the specified bid match types.
         * @var BidMatchTypeReportFilter
         */
        public $BidMatchType;

        /**
         * The report will include data for only the specified bid strategy type or types.
         * @var BidStrategyTypeReportFilter
         */
        public $BidStrategyType;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only the specified delivered match types.
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only the keyword status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;

        /**
         * The report will include data for only the specified keywords.
         * @var string[]
         */
        public $Keywords;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
