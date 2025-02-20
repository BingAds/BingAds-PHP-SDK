<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createresponsiveadrecommendation?view=bingads-13 CreateResponsiveAdRecommendation Request Object
     * 
     * @uses AdSubType
     * @uses AdRecommendationTextTone
     * @uses AdRecommendationVideoType
     * @used-by BingAdsCampaignManagementService::CreateResponsiveAdRecommendation
     */
    final class CreateResponsiveAdRecommendationRequest
    {
        /**
         * Reserved.
         * @var AdSubType
         */
        public $AdSubType;

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

        /**
         * Reserved.
         * @var AdRecommendationVideoType
         */
        public $VideoType;
    }
}
