<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies online conversion adjustments.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/applyonlineconversionadjustments?view=bingads-13 ApplyOnlineConversionAdjustments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyOnlineConversionAdjustments
     */
    final class ApplyOnlineConversionAdjustmentsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
