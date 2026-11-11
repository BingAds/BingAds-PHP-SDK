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
         * The responsive ad whose assets you want to refine.
         * @var ResponsiveAd
         */
        public $ResponsiveAd;

        /**
         * The text refinement operations to apply.
         * @var AdRecommendationTextRefineOperation[]
         */
        public $TextRefineOperations;

        /**
         * The image refinement operations to apply.
         * @var AdRecommendationImageRefineOperation[]
         */
        public $ImageRefineOperations;

        /**
         * An array of images recommended to be included in the responsive ad.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * The list of additional properties to include in the recommendation.
         * @var AdRecommendationAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
