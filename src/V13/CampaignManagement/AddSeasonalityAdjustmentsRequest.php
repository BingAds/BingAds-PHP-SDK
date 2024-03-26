<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addseasonalityadjustments?view=bingads-13 AddSeasonalityAdjustments Request Object
     * 
     * @uses SeasonalityAdjustment
     * @used-by BingAdsCampaignManagementService::AddSeasonalityAdjustments
     */
    final class AddSeasonalityAdjustmentsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var SeasonalityAdjustment[]
         */
        public $SeasonalityAdjustments;
    }
}
