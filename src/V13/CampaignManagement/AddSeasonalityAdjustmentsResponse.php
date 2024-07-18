<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Add seasonality adjustments to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addseasonalityadjustments?view=bingads-13 AddSeasonalityAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSeasonalityAdjustments
     */
    final class AddSeasonalityAdjustmentsResponse
    {
        /**
         * The seasonality adjustment IDs.
         * @var integer[]
         */
        public $SeasonalityAdjustmentIds;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
