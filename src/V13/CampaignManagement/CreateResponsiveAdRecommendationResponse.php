<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsiveadrecommendation?view=bingads-13 CreateResponsiveAdRecommendation Response Object
     * 
     * @uses ResponsiveAd
     * @uses AdRecommendationImageSuggestion
     * @uses AdRecommendationVideoSuggestion
     * @used-by BingAdsCampaignManagementService::CreateResponsiveAdRecommendation
     */
    final class CreateResponsiveAdRecommendationResponse
    {
        /**
         * Reserved.
         * @var ResponsiveAd
         */
        public $ResponsiveAd;

        /**
         * Reserved.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Reserved.
         * @var AdRecommendationVideoSuggestion[]
         */
        public $VideoSuggestions;
    }
}
