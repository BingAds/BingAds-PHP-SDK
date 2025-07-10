<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine an asset group recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineassetgrouprecommendation?view=bingads-13 RefineAssetGroupRecommendation Request Object
     * 
     * @uses AssetGroup
     * @uses AdRecommendationTextRefineOperation
     * @uses AdRecommendationImageSuggestion
     * @uses AdRecommendationImageRefineOperation
     * @uses AdRecommendationAdditionalField
     * @used-by BingAdsCampaignManagementService::RefineAssetGroupRecommendation
     */
    final class RefineAssetGroupRecommendationRequest
    {
        /**
         * An asset group object containing recommended text assets.
         * @var AssetGroup
         */
        public $AssetGroup;

        /**
         * Reserved.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;

        /**
         * Reserved.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Array of image refine operations.
         * @var AdRecommendationImageRefineOperation[]
         */
        public $ImageRefineOperations;

        /**
         * Reserved.
         * @var AdRecommendationAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
