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
         * The recommendation type names: ADD_BROAD_MATCH_KEYWORD, CAMPAIGN_BUDGET, KEYWORD, REMOVE_CONFLICTING_NEGATIVE_KEYWORD, RESPONSIVE_SEARCH_AD, or RESPONSIVE_SEARCH_AD_ASSET.
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
