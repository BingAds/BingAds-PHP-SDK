<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyassetgrouplistinggroupactions?view=bingads-13 ApplyAssetGroupListingGroupActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyAssetGroupListingGroupActions
     */
    final class ApplyAssetGroupListingGroupActionsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $AssetGroupListingGroupIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
