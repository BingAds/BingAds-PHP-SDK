<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified seasonality adjustments associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyids?view=bingads-13 GetSeasonalityAdjustmentsByIds Response Object
     * 
     * @uses SeasonalityAdjustment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByIds
     */
    final class GetSeasonalityAdjustmentsByIdsResponse
    {
        /**
         * A list of the specified seasonality adjustments.
         * @var SeasonalityAdjustment[]
         */
        public $SeasonalityAdjustments;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
