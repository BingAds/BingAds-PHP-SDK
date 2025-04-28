<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineassetgrouprecommendation?view=bingads-13 RefineAssetGroupRecommendation Response Object
     * 
     * @uses AdRecommendationTextRefineResult
     * @uses AdRecommendationMediaRefineResult
     * @used-by BingAdsCampaignManagementService::RefineAssetGroupRecommendation
     */
    final class RefineAssetGroupRecommendationResponse
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
