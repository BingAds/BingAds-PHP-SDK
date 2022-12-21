<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the base object of Recommendation.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/recommendation?view=bingads-13 Recommendation Data Object
     * 
     * @used-by GetRecommendationsResponse
     */
    class Recommendation
    {
        /**
         * The identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the ad group that owns the recommendation.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign for the ad group that owns the recommendation.
         * @var integer
         */
        public $CampaignId;

        /**
         * Actual clicks of the ad group in the past 7 days.
         * @var integer
         */
        public $CurrentClicks;

        /**
         * Actual conversions of the ad group in the past 7 days.
         * @var integer
         */
        public $CurrentConversions;

        /**
         * Actual spending of the ad group in the past 7 days, in the currency of this account.
         * @var double
         */
        public $CurrentCost;

        /**
         * Actual impressions of the ad group in the past 7 days.
         * @var integer
         */
        public $CurrentImpressions;

        /**
         * The estimated click opportunities corresponding to the suggested ad.
         * @var integer
         */
        public $EstimatedIncreaseInClicks;

        /**
         * The estimated impression opportunities corresponding to the suggested ad.
         * @var integer
         */
        public $EstimatedIncreaseInConversions;

        /**
         * The estimated increase in spend corresponding to the suggested ad.
         * @var double
         */
        public $EstimatedIncreaseInCost;

        /**
         * The estimated impressions opportunities corresponding to the suggested ad.
         * @var integer
         */
        public $EstimatedIncreaseInImpressions;

        /**
         * The hash of the recommendation.
         * @var string
         */
        public $RecommendationHash;

        /**
         * The identifier of the recommendation.
         * @var string
         */
        public $RecommendationId;

        /**
         * The type of recommendation.
         * @var string
         */
        public $RecommendationType;
    }

}
