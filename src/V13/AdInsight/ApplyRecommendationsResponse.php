<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Apply one or more recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/applyrecommendations?view=bingads-13 ApplyRecommendations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsAdInsightService::ApplyRecommendations
     */
    final class ApplyRecommendationsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
