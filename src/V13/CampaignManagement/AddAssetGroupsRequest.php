<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addassetgroups?view=bingads-13 AddAssetGroups Request Object
     * 
     * @uses AssetGroup
     * @used-by BingAdsCampaignManagementService::AddAssetGroups
     */
    final class AddAssetGroupsRequest
    {
        /**
         * Reserved.
         * @var AssetGroup[]
         */
        public $AssetGroups;

        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;
    }
}
