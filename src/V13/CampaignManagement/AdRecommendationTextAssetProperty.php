<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation text asset property data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationtextassetproperty?view=bingads-13 AdRecommendationTextAssetProperty Data Object
     * 
     * @uses AdRecommendationTextField
     * @used-by AdRecommendationImageSuggestionMetadata
     */
    final class AdRecommendationTextAssetProperty
    {
        /**
         * The text.
         * @var string
         */
        public $Text;

        /**
         * The type of text.
         * @var AdRecommendationTextField
         */
        public $TextField;
    }

}
