<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies offline conversion adjustments.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/applyofflineconversionadjustments?view=bingads-13 ApplyOfflineConversionAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyOfflineConversionAdjustments
     */
    final class ApplyOfflineConversionAdjustmentsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
