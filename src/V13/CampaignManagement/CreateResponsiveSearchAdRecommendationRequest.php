<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create a responsive search ad recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsivesearchadrecommendation?view=bingads-13 CreateResponsiveSearchAdRecommendation Request Object
     * 
     * @uses AdRecommendationTextTone
     * @used-by BingAdsCampaignManagementService::CreateResponsiveSearchAdRecommendation
     */
    final class CreateResponsiveSearchAdRecommendationRequest
    {
        /**
         * An array of URLs of the web pages used to create recommended ad assets.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Optional description of the product or service that you want to target with the specific campaign.
         * @var string
         */
        public $Prompt;

        /**
         * Optional tone for recommended text assets.
         * @var AdRecommendationTextTone
         */
        public $TextTone;
    }
}
