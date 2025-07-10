<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation image suggestion metadata data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagesuggestionmetadata?view=bingads-13 AdRecommendationImageSuggestionMetadata Data Object
     * 
     * @uses AdRecommendationCustomizedProperty
     * @uses AdRecommendationImageAssetProperty
     * @uses AdRecommendationTextAssetProperty
     * @used-by AdRecommendationImageSuggestion
     */
    final class AdRecommendationImageSuggestionMetadata
    {
        /**
         * The customized properties for the ad recommendation.
         * @var AdRecommendationCustomizedProperty[]
         */
        public $CustomizedProperties;

        /**
         * The image asset properties for the ad recommendation.
         * @var AdRecommendationImageAssetProperty[]
         */
        public $ImageAssetProperties;

        /**
         * The identifier of the template.
         * @var string
         */
        public $TemplateId;

        /**
         * The version of the template.
         * @var string
         */
        public $TemplateVersion;

        /**
         * The text asset properties for the ad recommendation.
         * @var AdRecommendationTextAssetProperty[]
         */
        public $TextAssetProperties;
    }

}
