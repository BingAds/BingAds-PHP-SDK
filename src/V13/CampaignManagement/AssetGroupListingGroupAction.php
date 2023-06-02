<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgrouplistinggroupaction?view=bingads-13 AssetGroupListingGroupAction Data Object
     * 
     * @uses ItemAction
     * @uses AssetGroupListingGroup
     * @used-by ApplyAssetGroupListingGroupActionsRequest
     */
    final class AssetGroupListingGroupAction
    {
        /**
         * Reserved.
         * @var ItemAction
         */
        public $Action;

        /**
         * Reserved.
         * @var AssetGroupListingGroup
         */
        public $ListingGroup;
    }

}
