<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * Reserved.
         * @var AssetGroupListingType
         */
        public $AssetGroupListingType;

        /**
         * Reserved.
         * @var ProductCondition
         */
        public $Dimension;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * Reserved.
         * @var integer
         */
        public $ParentListingGroupId;
    }

}
