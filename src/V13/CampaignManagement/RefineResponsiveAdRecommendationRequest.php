<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/refineresponsiveadrecommendation?view=bingads-13 RefineResponsiveAdRecommendation Request Object
     * 
     * @uses ResponsiveAd
     * @uses AdRecommendationTextRefineOperation
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
    }
}
