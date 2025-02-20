<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsivesearchadrecommendation?view=bingads-13 CreateResponsiveSearchAdRecommendation Request Object
     * 
     * @uses AdRecommendationTextTone
     * @used-by BingAdsCampaignManagementService::CreateResponsiveSearchAdRecommendation
     */
    final class CreateResponsiveSearchAdRecommendationRequest
    {
        /**
         * Reserved.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved.
         * @var string
         */
        public $Prompt;

        /**
         * Reserved.
         * @var AdRecommendationTextTone
         */
        public $TextTone;
    }
}
