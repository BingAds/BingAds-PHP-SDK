<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional store properties that you can request when calling GetBMCStoresByCustomerId.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/bmcstoreadditionalfield?view=bingads-13 BMCStoreAdditionalField Value Set
     * 
     * @used-by GetBMCStoresByCustomerIdRequest
     */
    final class BMCStoreAdditionalField
    {
        /** Request that the service return global stores with SubType set to GlobalStore. */
        const GlobalStore = 'GlobalStore';

        /** The store's destination URL. */
        const StoreUrl = 'StoreUrl';
    }

}
