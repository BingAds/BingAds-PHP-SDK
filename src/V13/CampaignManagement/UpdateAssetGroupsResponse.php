<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified asset groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateassetgroups?view=bingads-13 UpdateAssetGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAssetGroups
     */
    final class UpdateAssetGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
