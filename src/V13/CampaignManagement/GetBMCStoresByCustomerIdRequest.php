<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the Microsoft Merchant Center stores for the specified customer.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbmcstoresbycustomerid?view=bingads-13 GetBMCStoresByCustomerId Request Object
     * 
     * @uses BMCStoreAdditionalField
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdRequest
    {
        /**
         * The list of additional stores that you want included.
         * @var BMCStoreAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
