<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Discover your recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getrecommendations?view=bingads-13 GetRecommendations Response Object
     * 
     * @uses Recommendation
     * @used-by BingAdsAdInsightService::GetRecommendations
     */
    final class GetRecommendationsResponse
    {
        /**
         * An array of Recommendation objects.
         * @var Recommendation[]
         */
        public $Recommendations;
    }
}
