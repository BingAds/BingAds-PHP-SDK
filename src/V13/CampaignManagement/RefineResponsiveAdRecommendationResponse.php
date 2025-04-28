<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsiveadrecommendation?view=bingads-13 RefineResponsiveAdRecommendation Response Object
     * 
     * @uses AdRecommendationTextRefineResult
     * @uses AdRecommendationMediaRefineResult
     * @used-by BingAdsCampaignManagementService::RefineResponsiveAdRecommendation
     */
    final class RefineResponsiveAdRecommendationResponse
    {
        /**
         * Reserved.
         * @var AdRecommendationTextRefineResult[]
         */
        public $TextRefineResults;

        /**
         * Reserved.
         * @var AdRecommendationMediaRefineResult[]
         */
        public $MediaRefineResults;
    }
}
