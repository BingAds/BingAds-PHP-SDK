<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addseasonalityadjustments?view=bingads-13 AddSeasonalityAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSeasonalityAdjustments
     */
    final class AddSeasonalityAdjustmentsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $SeasonalityAdjustmentIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
