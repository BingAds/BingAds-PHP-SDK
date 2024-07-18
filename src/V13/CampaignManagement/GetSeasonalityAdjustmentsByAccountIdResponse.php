<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the seasonality adjustments associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyaccountid?view=bingads-13 GetSeasonalityAdjustmentsByAccountId Response Object
     * 
     * @uses SeasonalityAdjustment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByAccountId
     */
    final class GetSeasonalityAdjustmentsByAccountIdResponse
    {
        /**
         * A list of the seasaonality adjustments associated with the specified account.
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
