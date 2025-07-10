<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation image asset property data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimageassetproperty?view=bingads-13 AdRecommendationImageAssetProperty Data Object
     * 
     * @uses AdRecommendationImageField
     * @used-by AdRecommendationImageSuggestionMetadata
     */
    final class AdRecommendationImageAssetProperty
    {
        /**
         * The crop height in pixels.
         * @var integer
         */
        public $CropHeight;

        /**
         * The crop width in pixels.
         * @var integer
         */
        public $CropWidth;

        /**
         * Where to crop along the x-axis in pixels.
         * @var integer
         */
        public $CropX;

        /**
         * Where to crop along the y-axis in pixels.
         * @var integer
         */
        public $CropY;

        /**
         * The image field for the ad recommendation.
         * @var AdRecommendationImageField
         */
        public $ImageField;

        /**
         * The URL of the image.
         * @var string
         */
        public $ImageUrl;
    }

}
