<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyids?view=bingads-13 GetSeasonalityAdjustmentsByIds Response Object
     * 
     * @uses SeasonalityAdjustment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByIds
     */
    final class GetSeasonalityAdjustmentsByIdsResponse
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
