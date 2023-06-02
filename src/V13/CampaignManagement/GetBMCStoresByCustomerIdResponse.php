<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the Microsoft Merchant Center stores for the specified customer.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbmcstoresbycustomerid?view=bingads-13 GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        /**
         * The list of Microsoft Merchant Center stores for the specified customer.
         * @var BMCStore[]
         */
        public $BMCStores;
    }
}
