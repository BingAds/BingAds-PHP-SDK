<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Retrieve a list of recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/retrieverecommendations?view=bingads-13 RetrieveRecommendations Response Object
     * 
     * @uses RecommendationBase
     * @used-by BingAdsAdInsightService::RetrieveRecommendations
     */
    final class RetrieveRecommendationsResponse
    {
        /**
         * The available recommendations for specific account ID.
         * @var RecommendationBase[]
         */
        public $Recommendations;
    }
}
