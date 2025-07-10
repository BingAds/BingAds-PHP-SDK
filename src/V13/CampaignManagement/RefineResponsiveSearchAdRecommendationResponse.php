<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine a responsive search ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsivesearchadrecommendation?view=bingads-13 RefineResponsiveSearchAdRecommendation Response Object
     * 
     * @uses AdRecommendationTextRefineResult
     * @used-by BingAdsCampaignManagementService::RefineResponsiveSearchAdRecommendation
     */
    final class RefineResponsiveSearchAdRecommendationResponse
    {
        /**
         * A list of the text refine results.
         * @var AdRecommendationTextRefineResult[]
         */
        public $TextRefineResults;
    }
}
