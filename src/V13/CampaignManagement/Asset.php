<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of an asset with a unique Microsoft Advertising identifier that can be reused across multiple ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/asset?view=bingads-13 Asset Data Object
     * 
     * @used-by AssetLink
     */
    class Asset
    {
        /**
         * The unique Microsoft Advertising identifier for the asset in a Microsoft Advertising account.
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
