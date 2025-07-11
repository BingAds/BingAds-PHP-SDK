<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create a responsive ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsiveadrecommendation?view=bingads-13 CreateResponsiveAdRecommendation Response Object
     * 
     * @uses ResponsiveAd
     * @uses AdRecommendationImageSuggestion
     * @uses AdRecommendationVideoSuggestion
     * @uses AdRecommendationJobInfo
     * @used-by BingAdsCampaignManagementService::CreateResponsiveAdRecommendation
     */
    final class CreateResponsiveAdRecommendationResponse
    {
        /**
         * A responsive ad object containing recommended text assets.
         * @var ResponsiveAd
         */
        public $ResponsiveAd;

        /**
         * An array of images recommended to be included in the responsive ad.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * An array of videos recommended to be included in the responsive ad.
         * @var AdRecommendationVideoSuggestion[]
         */
        public $VideoSuggestions;

        /**
         * Whether the brand is detected in the request prompt.
         * @var string
         */
        public $PromptBrandWarning;

        /**
         * The job information for the video recommendation job.
         * @var AdRecommendationJobInfo
         */
        public $JobInfo;
    }
}
