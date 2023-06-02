<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbyids?view=bingads-13 GetAssetGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByIds
     */
    final class GetAssetGroupsByIdsRequest
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
