<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Discover your recommendations.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getrecommendations?view=bingads-13 GetRecommendations Request Object
     * 
     * @used-by BingAdsAdInsightService::GetRecommendations
     */
    final class GetRecommendationsRequest
    {
        /**
         * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the ad group for which you want to determine responsive search ads opportunities.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the recommendation type that you want to get.
         * @var string
         */
        public $RecommendationType;
    }
}
