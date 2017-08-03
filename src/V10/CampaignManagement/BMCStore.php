<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a Bing Merchant Center store.
     * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.100).aspx BMCStore Data Object
     * 
     * @used-by GetBMCStoresByCustomerIdResponse
     */
    final class BMCStore
    {
        public $HasCatalog;
        public $Id;
        public $IsActive;
        public $IsProductAdsEnabled;
        public $Name;
    }

}
