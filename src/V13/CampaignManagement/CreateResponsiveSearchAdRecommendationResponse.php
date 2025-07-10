<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create a responsive search ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsivesearchadrecommendation?view=bingads-13 CreateResponsiveSearchAdRecommendation Response Object
     * 
     * @uses ResponsiveSearchAd
     * @used-by BingAdsCampaignManagementService::CreateResponsiveSearchAdRecommendation
     */
    final class CreateResponsiveSearchAdRecommendationResponse
    {
        /**
         * A responsive search ad object containing recommended text assets.
         * @var ResponsiveSearchAd
         */
        public $ResponsiveSearchAd;
    }
}
