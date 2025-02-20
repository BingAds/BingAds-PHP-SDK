<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified asset groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateassetgroups?view=bingads-13 UpdateAssetGroups Request Object
     * 
     * @uses AssetGroup
     * @used-by BingAdsCampaignManagementService::UpdateAssetGroups
     */
    final class UpdateAssetGroupsRequest
    {
        /**
         * The ID of the performance max campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * Array of asset groups to update for the specified campaign.
         * @var AssetGroup[]
         */
        public $AssetGroups;
    }
}
