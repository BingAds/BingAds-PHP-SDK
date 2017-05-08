<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.110).aspx GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        /**
         * The list of Bing Merchant Center stores for the specified customer.
         * @var BMCStore[]
         */
        public $BMCStores;
    }
}
