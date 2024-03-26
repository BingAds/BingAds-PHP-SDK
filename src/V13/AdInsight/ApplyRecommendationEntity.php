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
         * The type of recommendation: CAMPAIGN_BUDGET, KEYWORD or RESPONSIVE_SEARCH_AD.
         * @var string
         */
        public $RecommendationType;
    }

}
