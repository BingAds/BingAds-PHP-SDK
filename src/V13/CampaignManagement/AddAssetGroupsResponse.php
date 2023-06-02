<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addassetgroups?view=bingads-13 AddAssetGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAssetGroups
     */
    final class AddAssetGroupsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $AssetGroupIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
