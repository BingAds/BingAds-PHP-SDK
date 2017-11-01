<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Applies offline conversions for the account with Microsoft Click Id among other offline conversion data.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/applyofflineconversions?view=bingads-11 ApplyOfflineConversions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyOfflineConversions
     */
    final class ApplyOfflineConversionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
