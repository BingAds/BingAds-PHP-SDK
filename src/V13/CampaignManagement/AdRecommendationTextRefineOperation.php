<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ad recommendation text refine operation data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationtextrefineoperation?view=bingads-13 AdRecommendationTextRefineOperation Data Object
     * 
     * @uses AdRecommendationTextField
     * @uses AdRecommendationTextTone
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     * @used-by RefineResponsiveSearchAdRecommendationRequest
     */
    final class AdRecommendationTextRefineOperation
    {
        /**
         * Reserved.
         * @var AdRecommendationTextField
         */
        public $TextField;

        /**
         * Reserved.
         * @var integer
         */
        public $TextFieldIndex;

        /**
         * Reserved.
         * @var AdRecommendationTextTone
         */
        public $TextTone;
    }

}
