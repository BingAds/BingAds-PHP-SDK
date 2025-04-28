<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimageassetproperty?view=bingads-13 AdRecommendationImageAssetProperty Data Object
     * 
     * @uses AdRecommendationImageField
     * @used-by AdRecommendationImageSuggestionMetadata
     */
    final class AdRecommendationImageAssetProperty
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CropHeight;

        /**
         * Reserved.
         * @var integer
         */
        public $CropWidth;

        /**
         * Reserved.
         * @var integer
         */
        public $CropX;

        /**
         * Reserved.
         * @var integer
         */
        public $CropY;

        /**
         * Reserved.
         * @var AdRecommendationImageField
         */
        public $ImageField;

        /**
         * Reserved.
         * @var string
         */
        public $ImageUrl;
    }

}
