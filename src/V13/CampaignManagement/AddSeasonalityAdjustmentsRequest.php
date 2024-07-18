<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Add seasonality adjustments to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addseasonalityadjustments?view=bingads-13 AddSeasonalityAdjustments Request Object
     * 
     * @uses SeasonalityAdjustment
     * @used-by BingAdsCampaignManagementService::AddSeasonalityAdjustments
     */
    final class AddSeasonalityAdjustmentsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The seasonality adjustments to add.
         * @var SeasonalityAdjustment[]
         */
        public $SeasonalityAdjustments;
    }
}
