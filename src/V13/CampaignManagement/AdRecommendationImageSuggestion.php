<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagesuggestion?view=bingads-13 AdRecommendationImageSuggestion Data Object
     * 
     * @uses AssetLink
     * @uses Image
     * @used-by CreateAssetGroupRecommendationResponse
     * @used-by CreateResponsiveAdRecommendationResponse
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
         * @var string
         */
        public $ImageUrl;
    }

}
