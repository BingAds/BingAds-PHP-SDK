<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves a responsive ad recommentation job.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getresponsiveadrecommendationjob?view=bingads-13 GetResponsiveAdRecommendationJob Response Object
     * 
     * @uses ResponsiveAd
     * @uses AdRecommendationImageSuggestion
     * @uses AdRecommendationVideoSuggestion
     * @uses AdRecommendationJobInfo
     * @used-by BingAdsCampaignManagementService::GetResponsiveAdRecommendationJob
     */
    final class GetResponsiveAdRecommendationJobResponse
    {
        /**
         * A responsive ad format for audience ads and multimedia ads.
         * @var ResponsiveAd
         */
        public $ResponsiveAd;

        /**
         * A list of ad recommendation image suggestion.
         * @var AdRecommendationImageSuggestion[]
         */
        public $ImageSuggestions;

        /**
         * A list of ad recommendation video suggestions.
         * @var AdRecommendationVideoSuggestion[]
         */
        public $VideoSuggestions;

        /**
         * Whether the brand is detected in the request prompt.
         * @var string
         */
        public $PromptBrandWarning;

        /**
         * The ad recommendation job info data object.
         * @var AdRecommendationJobInfo
         */
        public $JobInfo;
    }
}
