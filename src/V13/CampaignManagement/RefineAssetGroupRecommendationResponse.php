<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine an asset group recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineassetgrouprecommendation?view=bingads-13 RefineAssetGroupRecommendation Response Object
     * 
     * @uses AdRecommendationTextRefineResult
     * @uses AdRecommendationMediaRefineResult
     * @used-by BingAdsCampaignManagementService::RefineAssetGroupRecommendation
     */
    final class RefineAssetGroupRecommendationResponse
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
