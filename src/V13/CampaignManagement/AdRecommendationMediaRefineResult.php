<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * Reserved.
         * @var AdRecommendationRefinedMedia[]
         */
        public $MediaList;
    }

}
