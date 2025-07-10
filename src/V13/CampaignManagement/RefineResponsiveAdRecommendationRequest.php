<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Refine a responsive ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsiveadrecommendation?view=bingads-13 RefineResponsiveAdRecommendation Request Object
     * 
     * @uses ResponsiveAd
     * @uses AdRecommendationTextRefineOperation
     * @uses AdRecommendationImageRefineOperation
     * @uses AdRecommendationImageSuggestion
     * @uses AdRecommendationAdditionalField
     * @used-by BingAdsCampaignManagementService::RefineResponsiveAdRecommendation
     */
    final class RefineResponsiveAdRecommendationRequest
    {
        /**
         * Reserved.
         * @var ResponsiveAd
         */
        public $ResponsiveAd;

        /**
         * Reserved.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;

        /**
         * Reserved.
         * @var AdRecommendationImageRefineOperation[]
         */
        public $ImageRefineOperations;

        /**
         * Reserved.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * Reserved.
         * @var AdRecommendationAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
