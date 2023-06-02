<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteassetgroups?view=bingads-13 DeleteAssetGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAssetGroups
     */
    final class DeleteAssetGroupsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $AssetGroupIds;
    }
}
