<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbyids?view=bingads-13 GetAssetGroupsByIds Response Object
     * 
     * @uses AssetGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByIds
     */
    final class GetAssetGroupsByIdsResponse
    {
        /**
         * Reserved.
         * @var AssetGroup[]
         */
        public $AssetGroups;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
