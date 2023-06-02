<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroup?view=bingads-13 AssetGroup Data Object
     * 
     * @uses CallToAction
     * @uses AssetLink
     * @uses AssetGroupEditorialStatus
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses AssetGroupStatus
     * @used-by AddAssetGroupsRequest
     * @used-by GetAssetGroupsByCampaignIdResponse
     * @used-by GetAssetGroupsByIdsResponse
     * @used-by UpdateAssetGroupsRequest
     */
    final class AssetGroup
    {
        /**
         * Reserved.
         * @var string
         */
        public $BusinessName;

        /**
         * Reserved.
         * @var CallToAction
         */
        public $CallToAction;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $Descriptions;

        /**
         * Reserved.
         * @var AssetGroupEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved.
         * @var Date
         */
        public $EndDate;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $Headlines;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $LongHeadlines;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var string
         */
        public $Path1;

        /**
         * Reserved.
         * @var string
         */
        public $Path2;

        /**
         * Reserved.
         * @var Date
         */
        public $StartDate;

        /**
         * Reserved.
         * @var AssetGroupStatus
         */
        public $Status;
    }

}
