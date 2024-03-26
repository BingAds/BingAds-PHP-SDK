<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Apply one or more recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/applyrecommendations?view=bingads-13 ApplyRecommendations Request Object
     * 
     * @uses ApplyRecommendationEntity
     * @used-by BingAdsAdInsightService::ApplyRecommendations
     */
    final class ApplyRecommendationsRequest
    {
        /**
         * The list of operations to apply recommendations.
         * @var ApplyRecommendationEntity[]
         */
        public $Entities;
    }
}
