<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets reasons for asset group editorial issues.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getassetgroupseditorialreasons?view=bingads-13 GetAssetGroupsEditorialReasons Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @used-by BingAdsCampaignManagementService::GetAssetGroupsEditorialReasons
     */
    final class GetAssetGroupsEditorialReasonsRequest
    {
        /**
         * The identifier of the account that owns the asset groups.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of asset groups and corresponding entity associations to get.
         * @var EntityIdToParentIdAssociation[]
         */
        public $AssetGroupIdToCampaignIdAssociations;
    }
}
