<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a Bing Merchant Center store.
     * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.110).aspx BMCStore Data Object
     * 
     * @used-by GetBMCStoresByCustomerIdResponse
     */
    final class BMCStore
    {
        /**
         * Value will be true if the store has a catalog of items, and otherwise the value is false.
         * @var boolean
         */
        public $HasCatalog;

        /**
         * The unique identifier for the Bing Merchant Center store.
         * @var integer
         */
        public $Id;

        /**
         * Value will be true if the store is active, and otherwise the value is false.
         * @var boolean
         */
        public $IsActive;

        /**
         * Value will be true if the store is enabled for product ads in Bing Ads, and otherwise the value is false.
         * @var boolean
         */
        public $IsProductAdsEnabled;

        /**
         * Defines the name of the store as defined in the Bing Merchant Center.
         * @var string
         */
        public $Name;
    }

}
