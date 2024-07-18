<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified seasonality adjustments associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyids?view=bingads-13 GetSeasonalityAdjustmentsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByIds
     */
    final class GetSeasonalityAdjustmentsByIdsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The seasonality adjustment IDs.
         * @var integer[]
         */
        public $SeasonalityAdjustmentIds;
    }
}
