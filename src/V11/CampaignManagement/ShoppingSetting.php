<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the campaign level settings for a Bing Shopping Campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913132(v=msads.110).aspx ShoppingSetting Data Object
     */
    final class ShoppingSetting extends Setting
    {
        /**
         * Determines whether local inventory ads are enabled for the Bing Merchant Center store.
         * @var boolean
         */
        public $LocalInventoryAdsEnabled;

        /**
         * Helps determine which Bing Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
         * @var integer
         */
        public $Priority;

        /**
         * The country code for the Bing Merchant Center store.
         * @var string
         */
        public $SalesCountryCode;

        /**
         * The unique identifier for the Bing Merchant Center store that your product catalog feed belongs to.
         * @var integer
         */
        public $StoreId;
    }

}
