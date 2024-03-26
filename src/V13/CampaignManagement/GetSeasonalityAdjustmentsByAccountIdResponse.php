<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyaccountid?view=bingads-13 GetSeasonalityAdjustmentsByAccountId Response Object
     * 
     * @uses SeasonalityAdjustment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByAccountId
     */
    final class GetSeasonalityAdjustmentsByAccountIdResponse
    {
        /**
         * Reserved.
         * @var SeasonalityAdjustment[]
         */
        public $SeasonalityAdjustments;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
