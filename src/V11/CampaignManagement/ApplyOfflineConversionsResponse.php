<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Applies offline conversions for the account with Microsoft Click Id among other offline conversion data.
     * @link http://msdn.microsoft.com/en-us/library/mt803289(v=msads.110).aspx ApplyOfflineConversions Response Object
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
