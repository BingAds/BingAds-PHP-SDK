<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Dismiss one or more recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/dismissrecommendations?view=bingads-13 DismissRecommendations Request Object
     * 
     * @uses DismissRecommendationEntity
     * @used-by BingAdsAdInsightService::DismissRecommendations
     */
    final class DismissRecommendationsRequest
    {
        /**
         * The list of operations to dismiss recommendations.
         * @var DismissRecommendationEntity[]
         */
        public $Entities;
    }
}
