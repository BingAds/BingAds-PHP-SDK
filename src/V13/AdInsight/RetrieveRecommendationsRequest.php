<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Retrieve a list of recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/retrieverecommendations?view=bingads-13 RetrieveRecommendations Request Object
     * 
     * @used-by BingAdsAdInsightService::RetrieveRecommendations
     */
    final class RetrieveRecommendationsRequest
    {
        /**
         * The recommendation type names: CAMPAIGN_BUDGET, KEYWORD, or RESPONSIVE_SEARCH_AD.
         * @var string[]
         */
        public $RecommendationTypes;

        /**
         * The max number of returned recommendations.
         * @var integer
         */
        public $MaxCount;
    }
}
