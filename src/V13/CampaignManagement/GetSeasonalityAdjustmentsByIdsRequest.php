<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getseasonalityadjustmentsbyids?view=bingads-13 GetSeasonalityAdjustmentsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSeasonalityAdjustmentsByIds
     */
    final class GetSeasonalityAdjustmentsByIdsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $SeasonalityAdjustmentIds;
    }
}
