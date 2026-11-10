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
         * The text refinement operations to apply.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;

        /**
         * An array of images recommended to be included in the asset group.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Array of image refine operations.
         * @var AdRecommendationImageRefineOperation[]
         */
        public $ImageRefineOperations;

        /**
         * The list of additional properties to include in the recommendation.
         * @var AdRecommendationAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
