<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation text refine result data object.
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
         * An array of OperationError objects that contains the details that explain why the service operation failed.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * List of text asset links.
         * @var AssetLink[]
         */
        public $TextAssetLinks;
    }

}
