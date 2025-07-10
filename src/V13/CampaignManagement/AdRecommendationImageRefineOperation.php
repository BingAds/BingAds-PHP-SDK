<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation image refine operation data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagerefineoperation?view=bingads-13 AdRecommendationImageRefineOperation Data Object
     * 
     * @uses AdRecommendationImageRefineType
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     */
    final class AdRecommendationImageRefineOperation
    {
        /**
         * The image refine type.
         * @var AdRecommendationImageRefineType
         */
        public $ImageRefineType;

        /**
         * Index of the image to be refined.
         * @var integer
         */
        public $ImageIndex;

        /**
         * Description of image background change.
         * @var string
         */
        public $Prompt;
    }

}
