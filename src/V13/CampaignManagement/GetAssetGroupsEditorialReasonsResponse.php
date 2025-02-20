<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets reasons for asset group editorial issues.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupseditorialreasons?view=bingads-13 GetAssetGroupsEditorialReasons Response Object
     * 
     * @uses AssetGroupEditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsEditorialReasons
     */
    final class GetAssetGroupsEditorialReasonsResponse
    {
        /**
         * The collection of asset group editorial reasons.
         * @var AssetGroupEditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
