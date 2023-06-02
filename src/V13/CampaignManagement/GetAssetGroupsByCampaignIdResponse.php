<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbycampaignid?view=bingads-13 GetAssetGroupsByCampaignId Response Object
     * 
     * @uses AssetGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByCampaignId
     */
    final class GetAssetGroupsByCampaignIdResponse
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
