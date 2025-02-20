<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createassetgrouprecommendation?view=bingads-13 CreateAssetGroupRecommendation Request Object
     * 
     * @uses AdRecommendationTextTone
     * @used-by BingAdsCampaignManagementService::CreateAssetGroupRecommendation
     */
    final class CreateAssetGroupRecommendationRequest
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
