<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Dismiss one or more recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/dismissrecommendations?view=bingads-13 DismissRecommendations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsAdInsightService::DismissRecommendations
     */
    final class DismissRecommendationsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
