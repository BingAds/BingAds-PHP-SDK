<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Dismiss a recommendation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/dismissrecommendationentity?view=bingads-13 DismissRecommendationEntity Data Object
     * 
     * @used-by DismissRecommendationsRequest
     */
    final class DismissRecommendationEntity
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
