<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Creates a brand kit recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createbrandkitrecommendation?view=bingads-13 CreateBrandKitRecommendation Response Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::CreateBrandKitRecommendation
     */
    final class CreateBrandKitRecommendationResponse
    {
        /**
         * The brand kit data object.
         * @var BrandKit
         */
        public $BrandKit;
    }
}
