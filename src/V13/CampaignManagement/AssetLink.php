<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the relationship of an asset to an ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetlink?view=bingads-13 AssetLink Data Object
     * 
     * @uses Asset
     * @uses AssetLinkEditorialStatus
     * @used-by AssetGroup
     * @used-by ImageAdExtension
     * @used-by ResponsiveAd
     * @used-by ResponsiveSearchAd
     */
    final class AssetLink
    {
        /**
         * The asset with a unique Microsoft Advertising identifier that can be reused across multiple ads.
         * @var Asset
         */
        public $Asset;

        /**
         * This lets you know how well the asset is performing.
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
