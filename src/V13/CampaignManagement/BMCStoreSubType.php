<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible values for Microsoft Merchant Center store sub types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/bmcstoresubtype?view=bingads-13 BMCStoreSubType Value Set
     * 
     * @used-by BMCStore
     */
    final class BMCStoreSubType
    {
        /** The Microsoft Merchant Center store supports Shopping Campaigns for Brands. */
        const CoOp = 'CoOp';

        /** With Shopping Campaigns for Brands the global store encompasses all linked stores under the current manager account. */
        const GlobalStore = 'GlobalStore';
    }

}
