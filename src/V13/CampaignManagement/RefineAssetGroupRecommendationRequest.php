<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineassetgrouprecommendation?view=bingads-13 RefineAssetGroupRecommendation Request Object
     * 
     * @uses AssetGroup
     * @uses AdRecommendationTextRefineOperation
     * @used-by BingAdsCampaignManagementService::RefineAssetGroupRecommendation
     */
    final class RefineAssetGroupRecommendationRequest
    {
        /**
         * Reserved.
         * @var AssetGroup
         */
        public $AssetGroup;

        /**
         * Reserved.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;
    }
}
