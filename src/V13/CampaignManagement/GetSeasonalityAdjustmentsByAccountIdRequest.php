<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the seasonality adjustments associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyaccountid?view=bingads-13 GetSeasonalityAdjustmentsByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByAccountId
     */
    final class GetSeasonalityAdjustmentsByAccountIdRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;
    }
}
