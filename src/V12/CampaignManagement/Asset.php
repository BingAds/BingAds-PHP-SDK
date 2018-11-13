<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the base object of an asset with a unique Bing Ads identifier that can be reused across multiple ads.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/asset?view=bingads-12 Asset Data Object
     * 
     * @used-by AssetLink
     */
    class Asset
    {
        /**
         * The unique Bing Ads identifier for the asset in a Bing Ads account.
         * @var integer
         */
        public $Id;

        /**
         * Reserved for future use.
         * @var string
         */
        public $Name;

        /**
         * The type of the asset.
         * @var string
         */
        public $Type;
    }

}
