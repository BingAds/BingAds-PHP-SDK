<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateseasonalityadjustments?view=bingads-13 UpdateSeasonalityAdjustments Request Object
     * 
     * @uses SeasonalityAdjustment
     * @used-by BingAdsCampaignManagementService::UpdateSeasonalityAdjustments
     */
    final class UpdateSeasonalityAdjustmentsRequest
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
