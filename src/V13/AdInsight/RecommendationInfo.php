<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the base object of RecommendationInfo.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/recommendationinfo?view=bingads-13 RecommendationInfo Data Object
     * 
     * @used-by TagRecommendationsRequest
     */
    class RecommendationInfo
    {
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
    }

}
