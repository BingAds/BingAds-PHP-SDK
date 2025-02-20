<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of asset groups to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addassetgroups?view=bingads-13 AddAssetGroups Request Object
     * 
     * @uses AssetGroup
     * @used-by BingAdsCampaignManagementService::AddAssetGroups
     */
    final class AddAssetGroupsRequest
    {
        /**
         * Array of asset groups to add to the specified campaign.
         * @var AssetGroup[]
         */
        public $AssetGroups;

        /**
         * The ID of the Performace Max campaign.
         * @var integer
         */
        public $CampaignId;
    }
}
