<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbyids?view=bingads-13 GetAssetGroupsByIds Request Object
     * 
     * @uses AssetGroupAdditionalField
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

        /**
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var AssetGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
