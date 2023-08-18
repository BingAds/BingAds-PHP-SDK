<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbycampaignid?view=bingads-13 GetAssetGroupsByCampaignId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByCampaignId
     */
    final class GetAssetGroupsByCampaignIdRequest
    {
        /**
         * The ID of the performance max campaign.
         * @var integer
         */
        public $CampaignId;
    }
}
