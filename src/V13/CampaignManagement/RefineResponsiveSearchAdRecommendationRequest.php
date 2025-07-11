<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine a responsive search ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsivesearchadrecommendation?view=bingads-13 RefineResponsiveSearchAdRecommendation Request Object
     * 
     * @uses ResponsiveSearchAd
     * @uses AdRecommendationTextRefineOperation
     * @used-by BingAdsCampaignManagementService::RefineResponsiveSearchAdRecommendation
     */
    final class RefineResponsiveSearchAdRecommendationRequest
    {
        /**
         * Reserved.
         * @var ResponsiveSearchAd
         */
        public $ResponsiveSearchAd;

        /**
         * Reserved.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;
    }
}
