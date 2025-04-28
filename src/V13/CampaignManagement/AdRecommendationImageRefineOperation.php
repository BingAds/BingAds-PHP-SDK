<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationimagerefineoperation?view=bingads-13 AdRecommendationImageRefineOperation Data Object
     * 
     * @uses AdRecommendationImageRefineType
     * @used-by RefineAssetGroupRecommendationRequest
     * @used-by RefineResponsiveAdRecommendationRequest
     */
    final class AdRecommendationImageRefineOperation
    {
        /**
         * Reserved.
         * @var AdRecommendationImageRefineType
         */
        public $ImageRefineType;

        /**
         * Reserved.
         * @var integer
         */
        public $ImageIndex;

        /**
         * Reserved.
         * @var string
         */
        public $Prompt;
    }

}
