<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Creates a brand kit recommendation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/createbrandkitrecommendation?view=bingads-13 CreateBrandKitRecommendation Request Object
     * 
     * @used-by BingAdsCampaignManagementService::CreateBrandKitRecommendation
     */
    final class CreateBrandKitRecommendationRequest
    {
        /**
         * The identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The final URL of the brand kit.
         * @var string
         */
        public $FinalUrl;
    }
}
