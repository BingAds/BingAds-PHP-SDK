<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbyids?view=bingads-13 GetAssetGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByIds
     */
    final class GetAssetGroupsByIdsRequest
    {
        /**
         * The ID of the performance max campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * Array of asset group ids to update for the specified campaign.
         * @var integer[]
         */
        public $AssetGroupIds;
    }
}
