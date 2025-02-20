<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified seasonality adjustments from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteseasonalityadjustments?view=bingads-13 DeleteSeasonalityAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSeasonalityAdjustments
     */
    final class DeleteSeasonalityAdjustmentsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
