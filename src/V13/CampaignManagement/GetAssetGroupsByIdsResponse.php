<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbyids?view=bingads-13 GetAssetGroupsByIds Response Object
     * 
     * @uses AssetGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByIds
     */
    final class GetAssetGroupsByIdsResponse
    {
        /**
         * Array of asset groups to update for the specified campaign.
         * @var AssetGroup[]
         */
        public $AssetGroups;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
