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
         * The responsive search ad whose text assets you want to refine.
         * @var ResponsiveSearchAd
         */
        public $ResponsiveSearchAd;

        /**
         * The text refinement operations to apply.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;
    }
}
