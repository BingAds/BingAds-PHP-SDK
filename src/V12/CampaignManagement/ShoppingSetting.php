<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the campaign level settings to leverage your Bing Merchant Center store.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/shoppingsetting?view=bingads-12 ShoppingSetting Data Object
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
         * The unique identifier for the Bing Merchant Center store that contains a product catalog feed that you want to use for the campaign.
         * @var integer
         */
        public $StoreId;
    }

}
