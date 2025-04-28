<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var AdRecommendationCustomizedProperty[]
         */
        public $CustomizedProperties;

        /**
         * Reserved.
         * @var AdRecommendationImageAssetProperty[]
         */
        public $ImageAssetProperties;

        /**
         * Reserved.
         * @var string
         */
        public $TemplateId;

        /**
         * Reserved.
         * @var string
         */
        public $TemplateVersion;

        /**
         * Reserved.
         * @var AdRecommendationTextAssetProperty[]
         */
        public $TextAssetProperties;
    }

}
