<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A listing group that corresponds directly to the identifiers specified in the request.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgrouplistinggroup?view=bingads-13 AssetGroupListingGroup Data Object
     * 
     * @uses AssetGroupListingType
     * @uses ProductCondition
     * @used-by AssetGroupListingGroupAction
     * @used-by GetAssetGroupListingGroupsByIdsResponse
     */
    final class AssetGroupListingGroup
    {
        /**
         * The identifier of the asset group this listing group belongs to.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * The type of listing group, e.g., Subdivision or Unit.
         * @var AssetGroupListingType
         */
        public $AssetGroupListingType;

        /**
         * A condition that helps determine whether a product from the Microsoft Merchant Center store gets served as an ad.
         * @var ProductCondition
         */
        public $Dimension;

        /**
         * The unique Microsoft Advertising identifier of the AssetGroupListingGroup.
         * @var integer
         */
        public $Id;

        /**
         * Set to true If you want to exclude products specified by current.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The identifier of the parent listing group.
         * @var integer
         */
        public $ParentListingGroupId;
    }

}
