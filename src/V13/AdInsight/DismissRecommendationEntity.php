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
         * The type of recommendation: CAMPAIGN_BUDGET, KEYWORD or RESPONSIVE_SEARCH_AD.
         * @var string
         */
        public $RecommendationType;
    }

}
