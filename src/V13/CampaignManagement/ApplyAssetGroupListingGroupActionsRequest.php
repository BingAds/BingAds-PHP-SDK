<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies an action to an asset group listing group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyassetgrouplistinggroupactions?view=bingads-13 ApplyAssetGroupListingGroupActions Request Object
     * 
     * @uses AssetGroupListingGroupAction
     * @used-by BingAdsCampaignManagementService::ApplyAssetGroupListingGroupActions
     */
    final class ApplyAssetGroupListingGroupActionsRequest
    {
        /**
         * A list of AssetGroupListingGroupAction objects that each contain an Action element and a ListingGroup element.
         * @var AssetGroupListingGroupAction[]
         */
        public $ListingGroupActions;
    }
}
