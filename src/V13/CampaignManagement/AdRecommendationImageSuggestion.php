<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for ad recommendation image suggestion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagesuggestion?view=bingads-13 AdRecommendationImageSuggestion Data Object
     * 
     * @uses AssetLink
     * @uses Image
     * @uses AdRecommendationImageSuggestionMetadata
     * @used-by CreateAssetGroupRecommendationResponse
     * @used-by CreateResponsiveAdRecommendationResponse
     * @used-by GetResponsiveAdRecommendationJobResponse
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     */
    final class AdRecommendationImageSuggestion
    {
        /**
         * Defines the relationship of an asset to an ad.
         * @var AssetLink
         */
        public $AssetLink;

        /**
         * The suggsted image.
         * @var Image
         */
        public $Image;

        /**
         * The ad recommendation image suggestion metadata data object.
         * @var AdRecommendationImageSuggestionMetadata
         */
        public $ImageMetadata;

        /**
         * The URL of the suggested image.
         * @var string
         */
        public $ImageUrl;
    }

}
