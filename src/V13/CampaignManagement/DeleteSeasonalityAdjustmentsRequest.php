<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteseasonalityadjustments?view=bingads-13 DeleteSeasonalityAdjustments Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSeasonalityAdjustments
     */
    final class DeleteSeasonalityAdjustmentsRequest
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
