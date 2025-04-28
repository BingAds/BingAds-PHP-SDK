<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createassetgrouprecommendation?view=bingads-13 CreateAssetGroupRecommendation Response Object
     * 
     * @uses AssetGroup
     * @uses AdRecommendationImageSuggestion
     * @used-by BingAdsCampaignManagementService::CreateAssetGroupRecommendation
     */
    final class CreateAssetGroupRecommendationResponse
    {
        /**
         * Reserved.
         * @var AssetGroup
         */
        public $AssetGroup;

        /**
         * Reserved.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Reserved.
         * @var string
         */
        public $PromptBrandWarning;
    }
}
