<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateassetgroups?view=bingads-13 UpdateAssetGroups Request Object
     * 
     * @uses AssetGroup
     * @used-by BingAdsCampaignManagementService::UpdateAssetGroups
     */
    final class UpdateAssetGroupsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;

        /**
         * Reserved.
         * @var AssetGroup[]
         */
        public $AssetGroups;
    }
}
