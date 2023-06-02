<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgrouplistinggroupsbyids?view=bingads-13 GetAssetGroupListingGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAssetGroupListingGroupsByIds
     */
    final class GetAssetGroupListingGroupsByIdsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $AssetGroupListingGroupIds;
    }
}
