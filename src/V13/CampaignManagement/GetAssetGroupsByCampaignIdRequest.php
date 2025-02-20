<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupsbycampaignid?view=bingads-13 GetAssetGroupsByCampaignId Request Object
     * 
     * @uses AssetGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsByCampaignId
     */
    final class GetAssetGroupsByCampaignIdRequest
    {
        /**
         * The ID of the performance max campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var AssetGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
