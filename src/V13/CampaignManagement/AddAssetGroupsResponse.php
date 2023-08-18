<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of asset groups to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addassetgroups?view=bingads-13 AddAssetGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAssetGroups
     */
    final class AddAssetGroupsResponse
    {
        /**
         * Array of asset group IDs to update for the specified campaign.
         * @var integer[]
         */
        public $AssetGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
