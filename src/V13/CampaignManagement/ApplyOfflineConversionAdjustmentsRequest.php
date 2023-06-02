<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies offline conversion adjustments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyofflineconversionadjustments?view=bingads-13 ApplyOfflineConversionAdjustments Request Object
     * 
     * @uses OfflineConversionAdjustment
     * @used-by BingAdsCampaignManagementService::ApplyOfflineConversionAdjustments
     */
    final class ApplyOfflineConversionAdjustmentsRequest
    {
        /**
         * The offline conversion adjustments to apply.
         * @var OfflineConversionAdjustment[]
         */
        public $OfflineConversionAdjustments;
    }
}
