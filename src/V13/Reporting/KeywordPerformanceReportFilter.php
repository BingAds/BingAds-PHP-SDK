<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the keyword performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/keywordperformancereportfilter?view=bingads-13 KeywordPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdTypeReportFilter
     * @uses BidMatchTypeReportFilter
     * @uses BidStrategyTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @uses KeywordStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by KeywordPerformanceReportRequest
     */
    final class KeywordPerformanceReportFilter
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
         * How closely related your ads is to the customer's search query or other input.
         * @var integer[]
         */
        public $AdRelevance;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

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
         * How well your keyword competes against other keywords targeting the same traffic.
         * @var integer[]
         */
        public $ExpectedCtr;

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
         * An aggregate quality assessment of all landing pages on your site.
         * @var integer[]
         */
        public $LandingPageExperience;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;

        /**
         * The report will include data for only keywords with the specified quality scores.
         * @var integer[]
         */
        public $QualityScore;
    }

}
