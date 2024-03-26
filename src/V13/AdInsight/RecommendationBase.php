<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the RecommendationBase data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/recommendationbase?view=bingads-13 RecommendationBase Data Object
     * 
     * @uses RecommendationType
     * @used-by RetrieveRecommendationsResponse
     */
    class RecommendationBase
    {
        /**
         * The identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The ad group ID targeted by this recommendation.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The campaign ID targeted by this recommendation.
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
         * Whether the recommendation is dismissed or not.
         * @var boolean
         */
        public $Dismissed;

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

        /**
         * The RecommendationType value set has the following values: CampaignBudgetRecommendation, KeywordRecommendation, ResponsiveSearchAdRecommendation.
         * @var RecommendationType
         */
        public $Type;
    }

}
