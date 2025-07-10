<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ad recommendation video suggestion data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationvideosuggestion?view=bingads-13 AdRecommendationVideoSuggestion Data Object
     * 
     * @uses Video
     * @used-by CreateResponsiveAdRecommendationResponse
     * @used-by GetResponsiveAdRecommendationJobResponse
     */
    final class AdRecommendationVideoSuggestion
    {
        /**
         * Reserved.
         * @var Video
         */
        public $Video;
    }

}
