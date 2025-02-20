<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationtextrefineresult?view=bingads-13 AdRecommendationTextRefineResult Data Object
     * 
     * @uses OperationError
     * @uses AssetLink
     * @used-by RefineAssetGroupRecommendationResponse
     * @used-by RefineResponsiveAdRecommendationResponse
     * @used-by RefineResponsiveSearchAdRecommendationResponse
     */
    final class AdRecommendationTextRefineResult
    {
        /**
         * Reserved.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $TextAssetLinks;
    }

}
