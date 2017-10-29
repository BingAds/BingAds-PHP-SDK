<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getestimatedpositionbykeywords?version=11 GetEstimatedPositionByKeywords Request Object
     * 
     * @uses Currency
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
         * The language used to help determine  the country to use as the source of data for estimating the bids, if the PublisherCountries element is not specified.
         * @var string
         */
        public $Language;

        /**
         * The country codes of the countries to use as the source of data for estimating the bids.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * The monetary unit to use to calculate the cost estimates and suggested bid value.
         * @var Currency
         */
        public $Currency;

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
