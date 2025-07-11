<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create an asset group recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createassetgrouprecommendation?view=bingads-13 CreateAssetGroupRecommendation Response Object
     * 
     * @uses AssetGroup
     * @uses AdRecommendationImageSuggestion
     * @used-by BingAdsCampaignManagementService::CreateAssetGroupRecommendation
     */
    final class CreateAssetGroupRecommendationResponse
    {
        /**
         * An asset group object containing recommended text assets.
         * @var AssetGroup
         */
        public $AssetGroup;

        /**
         * An array of images recommended to be included in the asset group.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Whether the brand is detected in the request prompt.
         * @var string
         */
        public $PromptBrandWarning;
    }
}
