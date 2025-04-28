<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagesuggestion?view=bingads-13 AdRecommendationImageSuggestion Data Object
     * 
     * @uses AssetLink
     * @uses Image
     * @uses AdRecommendationImageSuggestionMetadata
     * @used-by CreateAssetGroupRecommendationResponse
     * @used-by CreateResponsiveAdRecommendationResponse
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     */
    final class AdRecommendationImageSuggestion
    {
        /**
         * Reserved.
         * @var AssetLink
         */
        public $AssetLink;

        /**
         * Reserved.
         * @var Image
         */
        public $Image;

        /**
         * Reserved.
         * @var AdRecommendationImageSuggestionMetadata
         */
        public $ImageMetadata;

        /**
         * Reserved.
         * @var string
         */
        public $ImageUrl;
    }

}
