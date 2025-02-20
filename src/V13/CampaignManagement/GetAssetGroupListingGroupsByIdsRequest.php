<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AssetGroupListingGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgrouplistinggroupsbyids?view=bingads-13 GetAssetGroupListingGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAssetGroupListingGroupsByIds
     */
    final class GetAssetGroupListingGroupsByIdsRequest
    {
        /**
         * The ID of the AssetGroup.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * A list of identifiers that identify the listing groups that had the action applied.
         * @var integer[]
         */
        public $AssetGroupListingGroupIds;
    }
}
