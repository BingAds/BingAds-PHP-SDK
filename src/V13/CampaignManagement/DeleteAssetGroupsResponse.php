<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AssetGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteassetgroups?view=bingads-13 DeleteAssetGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAssetGroups
     */
    final class DeleteAssetGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
