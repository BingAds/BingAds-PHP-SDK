<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.110).aspx GetAdsByEditorialStatus Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusResponse
    {
        /**
         * The list of ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }
}
