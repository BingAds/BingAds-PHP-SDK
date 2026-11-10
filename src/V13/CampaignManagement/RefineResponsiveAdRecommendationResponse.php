<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine a responsive ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsiveadrecommendation?view=bingads-13 RefineResponsiveAdRecommendation Response Object
     * 
     * @uses AdRecommendationTextRefineResult
     * @uses AdRecommendationMediaRefineResult
     * @used-by BingAdsCampaignManagementService::RefineResponsiveAdRecommendation
     */
    final class RefineResponsiveAdRecommendationResponse
    {
        /**
         * The text refinement results.
         * @var AdRecommendationTextRefineResult[]
         */
        public $TextRefineResults;

        /**
         * The media refinement results.
         * @var AdRecommendationMediaRefineResult[]
         */
        public $MediaRefineResults;
    }
}
