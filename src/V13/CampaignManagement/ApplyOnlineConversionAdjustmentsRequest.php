<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies online conversion adjustments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyonlineconversionadjustments?view=bingads-13 ApplyOnlineConversionAdjustments Request Object
     * 
     * @uses OnlineConversionAdjustment
     * @used-by BingAdsCampaignManagementService::ApplyOnlineConversionAdjustments
     */
    final class ApplyOnlineConversionAdjustmentsRequest
    {
        /**
         * The online conversion adjustments to apply.
         * @var OnlineConversionAdjustment[]
         */
        public $OnlineConversionAdjustments;
    }
}
