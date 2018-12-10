<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the relationship of an asset to an ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/assetlink?view=bingads-12 AssetLink Data Object
     * 
     * @uses Asset
     * @uses AssetLinkEditorialStatus
     * @used-by ResponsiveAd
     * @used-by ResponsiveSearchAd
     */
    final class AssetLink
    {
        /**
         * The asset with a unique Bing Ads identifier that can be reused across multiple ads.
         * @var Asset
         */
        public $Asset;

        /**
         * Reserved for future use.
         * @var string
         */
        public $AssetPerformanceLabel;

        /**
         * The editorial review status of the asset link, which indicates whether the asset is pending review, has been approved, or has been disapproved.
         * @var AssetLinkEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Determines whether the asset should only be used for a specific ad component, or whether you want Bing AI to optimize the layout for this asset.
         * @var string
         */
        public $PinnedField;
    }

}
