<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Make updates to the specified seasonality adjustments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateseasonalityadjustments?view=bingads-13 UpdateSeasonalityAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateSeasonalityAdjustments
     */
    final class UpdateSeasonalityAdjustmentsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
