<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusResponse
    {
        /**
         * An array of Ad-derived objects that represents the ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }
}
