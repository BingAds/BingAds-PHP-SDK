<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteassetgroups?view=bingads-13 DeleteAssetGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAssetGroups
     */
    final class DeleteAssetGroupsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
