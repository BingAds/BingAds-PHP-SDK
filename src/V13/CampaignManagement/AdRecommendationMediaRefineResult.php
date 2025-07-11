<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad recommendation media refine result data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrecommendationmediarefineresult?view=bingads-13 AdRecommendationMediaRefineResult Data Object
     * 
     * @uses OperationError
     * @uses AdRecommendationRefinedMedia
     * @used-by RefineAssetGroupRecommendationResponse
     * @used-by RefineResponsiveAdRecommendationResponse
     */
    final class AdRecommendationMediaRefineResult
    {
        /**
         * An array of OperationError objects that contains the details that explain why the service operation failed.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * List of ad recommendation refined media.
         * @var AdRecommendationRefinedMedia[]
         */
        public $MediaList;
    }

}
