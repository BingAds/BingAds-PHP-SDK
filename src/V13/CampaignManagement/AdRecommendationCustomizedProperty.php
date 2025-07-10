<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation customized property data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationcustomizedproperty?view=bingads-13 AdRecommendationCustomizedProperty Data Object
     * 
     * @used-by AdRecommendationImageSuggestionMetadata
     */
    final class AdRecommendationCustomizedProperty
    {
        /**
         * The asset type name.
         * @var string
         */
        public $AssetTypeName;

        /**
         * The property name.
         * @var string
         */
        public $PropertyName;

        /**
         * The property value.
         * @var string
         */
        public $PropertyValue;
    }

}
