<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Notifies Microsoft Advertising that the specific recommendation to create responsive search ads should be tagged as applied or dismissed.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/tagrecommendations?view=bingads-13 TagRecommendations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsAdInsightService::TagRecommendations
     */
    final class TagRecommendationsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
