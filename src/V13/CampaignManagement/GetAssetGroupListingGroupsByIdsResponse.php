<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AssetGroupListingGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgrouplistinggroupsbyids?view=bingads-13 GetAssetGroupListingGroupsByIds Response Object
     * 
     * @uses AssetGroupListingGroup
     * @used-by BingAdsCampaignManagementService::GetAssetGroupListingGroupsByIds
     */
    final class GetAssetGroupListingGroupsByIdsResponse
    {
        /**
         * The list of listing groups that correspond directly to the identifiers specified in the request.
         * @var AssetGroupListingGroup[]
         */
        public $AssetGroupListingGroups;
    }
}
