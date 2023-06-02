<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedbidbykeywords?view=bingads-13 GetEstimatedBidByKeywords Request Object
     * 
     * @uses KeywordAndMatchType
     * @uses TargetAdPosition
     * @uses CurrencyCode
     * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywords
     */
    final class GetEstimatedBidByKeywordsRequest
    {
        /**
         * A list of KeywordAndMatchType data objects for which you want to get suggested bid values.
         * @var KeywordAndMatchType[]
         */
        public $Keywords;

        /**
         * The position where you want your ads to appear in the search results.
         * @var TargetAdPosition
         */
        public $TargetPositionForAds;

        /**
         * The language used in parallel with location identifiers for estimating the bids.
         * @var string
         */
        public $Language;

        /**
         * The identifier or identifiers of the geographical locations to use for estimating the bids.
         * @var integer[]
         */
        public $LocationIds;

        /**
         * The ISO code for the monetary unit to use to calculate the cost estimates and suggested bid value.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * The identifier of the campaign that owns the ad group specified in AdGroupId.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the ad group whose performance data is used to help determine how well the keyword might perform in the context of the ad group.
         * @var integer
         */
        public $AdGroupId;

        /**
         * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
         * @var string
         */
        public $EntityLevelBid;
    }
}
