<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the campaign level settings for feed-based audience or shopping campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/shoppingsetting?view=bingads-11 ShoppingSetting Data Object
     */
    final class ShoppingSetting extends Setting
    {
        /**
         * Determines whether local inventory ads are enabled for the Bing Merchant Center store.
         * @var boolean
         */
        public $LocalInventoryAdsEnabled;

        /**
         * Helps determine which Bing Shopping campaign  serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
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
