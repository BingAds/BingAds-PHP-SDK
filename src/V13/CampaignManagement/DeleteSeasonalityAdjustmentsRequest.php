<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified seasonality adjustments from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteseasonalityadjustments?view=bingads-13 DeleteSeasonalityAdjustments Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSeasonalityAdjustments
     */
    final class DeleteSeasonalityAdjustmentsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The IDs of the seasonality adjustments to delete.
         * @var integer[]
         */
        public $SeasonalityAdjustmentIds;
    }
}
