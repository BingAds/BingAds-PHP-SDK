<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedpositionbykeywords?view=bingads-13 GetEstimatedPositionByKeywords Request Object
     * 
     * @uses CurrencyCode
     * @uses MatchType
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywords
     */
    final class GetEstimatedPositionByKeywordsRequest
    {
        /**
         * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value.
         * @var string[]
         */
        public $Keywords;

        /**
         * The maximum bid value to use to determine the estimated position in the search results.
         * @var double
         */
        public $MaxBid;

        /**
         * The language used in parallel with location identifiers for estimating the position.
         * @var string
         */
        public $Language;

        /**
         * The identifier or identifiers of the geographical locations to use for estimating the position.
         * @var integer[]
         */
        public $LocationIds;

        /**
         * The ISO code for the monetary unit to use to calculate the cost estimates and suggested bid value.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * An array of unique match types for which you want to get estimates.
         * @var MatchType[]
         */
        public $MatchTypes;

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
    }
}
