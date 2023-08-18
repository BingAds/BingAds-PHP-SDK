<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies an action to an asset group listing group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyassetgrouplistinggroupactions?view=bingads-13 ApplyAssetGroupListingGroupActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyAssetGroupListingGroupActions
     */
    final class ApplyAssetGroupListingGroupActionsResponse
    {
        /**
         * A list of IDs that for the listing groups that had the action applied.
         * @var integer[]
         */
        public $AssetGroupListingGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
