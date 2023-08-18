<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteassetgroups?view=bingads-13 DeleteAssetGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAssetGroups
     */
    final class DeleteAssetGroupsRequest
    {
        /**
         * The ID of the performance max campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * Array of asset group IDs to update for the specified campaign.
         * @var integer[]
         */
        public $AssetGroupIds;
    }
}
