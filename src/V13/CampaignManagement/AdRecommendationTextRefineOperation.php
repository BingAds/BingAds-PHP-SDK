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
         * The type of text field to refine.
         * @var AdRecommendationTextField
         */
        public $TextField;

        /**
         * The zero-based index of the text field to refine.
         * @var integer
         */
        public $TextFieldIndex;

        /**
         * The tone to use when refining the text.
         * @var AdRecommendationTextTone
         */
        public $TextTone;
    }

}
