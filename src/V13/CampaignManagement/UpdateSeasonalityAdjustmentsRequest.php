<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Make updates to the specified seasonality adjustments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateseasonalityadjustments?view=bingads-13 UpdateSeasonalityAdjustments Request Object
     * 
     * @uses SeasonalityAdjustment
     * @used-by BingAdsCampaignManagementService::UpdateSeasonalityAdjustments
     */
    final class UpdateSeasonalityAdjustmentsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The seasonality adjustments to update.
         * @var SeasonalityAdjustment[]
         */
        public $SeasonalityAdjustments;
    }
}
