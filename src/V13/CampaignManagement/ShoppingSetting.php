<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the campaign level settings to leverage your Microsoft Merchant Center store.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/shoppingsetting?view=bingads-13 ShoppingSetting Data Object
     */
    final class ShoppingSetting extends Setting
    {
        /**
         * Determines whether local inventory ads are enabled for the Microsoft Merchant Center store.
         * @var boolean
         */
        public $LocalInventoryAdsEnabled;

        /**
         * Helps determine which Microsoft Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Microsoft Merchant Center store.
         * @var integer
         */
        public $Priority;

        /**
         * The country code for the Microsoft Merchant Center store.
         * @var string
         */
        public $SalesCountryCode;

        /**
         * The unique identifier for the Microsoft Merchant Center store that contains a product catalog feed that you want to use for the campaign.
         * @var integer
         */
        public $StoreId;
    }

}
