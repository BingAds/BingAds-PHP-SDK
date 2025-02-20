<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * An object that contains an Action element and a ListingGroup element.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgrouplistinggroupaction?view=bingads-13 AssetGroupListingGroupAction Data Object
     * 
     * @uses ItemAction
     * @uses AssetGroupListingGroup
     * @used-by ApplyAssetGroupListingGroupActionsRequest
     */
    final class AssetGroupListingGroupAction
    {
        /**
         * The action to be applied for the AssetGroupListingGroup.
         * @var ItemAction
         */
        public $Action;

        /**
         * The AssetGroupListingGroup to apply action to.
         * @var AssetGroupListingGroup
         */
        public $ListingGroup;
    }

}
