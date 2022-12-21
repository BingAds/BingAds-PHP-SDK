<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Notifies Microsoft Advertising that the specific recommendation to create responsive search ads should be tagged as applied or dismissed.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/tagrecommendations?view=bingads-13 TagRecommendations Request Object
     * 
     * @uses RecommendationInfo
     * @used-by BingAdsAdInsightService::TagRecommendations
     */
    final class TagRecommendationsRequest
    {
        /**
         * The identifier of the recommendation type that you have applied.
         * @var string
         */
        public $RecommendationType;

        /**
         * The information for an individual recommendation.
         * @var RecommendationInfo[]
         */
        public $RecommendationsInfo;

        /**
         * The value must be set to either applied or dismissed
         * @var string
         */
        public $Lable;
    }
}
