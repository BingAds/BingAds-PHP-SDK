<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Applies offline conversions for the account with Microsoft Click Id among other offline conversion data.
     * @link http://msdn.microsoft.com/en-us/library/mt803289(v=msads.110).aspx ApplyOfflineConversions Request Object
     * 
     * @uses OfflineConversion
     * @used-by BingAdsCampaignManagementService::ApplyOfflineConversions
     */
    final class ApplyOfflineConversionsRequest
    {
        public $OfflineConversions;
    }
}
