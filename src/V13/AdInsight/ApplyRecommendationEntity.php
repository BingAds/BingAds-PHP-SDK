<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Apply a recommendation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/applyrecommendationentity?view=bingads-13 ApplyRecommendationEntity Data Object
     * 
     * @used-by ApplyRecommendationsRequest
     */
    final class ApplyRecommendationEntity
    {
        /**
         * The identifier of the recommendation.
         * @var string
         */
        public $RecommendationId;

        /**
         * The type of recommendation: ADD_BROAD_MATCH_KEYWORD, CAMPAIGN_BUDGET, KEYWORD, REMOVE_CONFLICTING_NEGATIVE_KEYWORD, RESPONSIVE_SEARCH_AD, or RESPONSIVE_SEARCH_AD_ASSET.
         * @var string
         */
        public $RecommendationType;
    }

}
