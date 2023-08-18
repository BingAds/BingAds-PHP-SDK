<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a collection of asset groups that failed editorial review.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupeditorialreasoncollection?view=bingads-13 AssetGroupEditorialReasonCollection Data Object
     * 
     * @uses AppealStatus
     * @uses AssetGroupEditorialReason
     * @used-by GetAssetGroupsEditorialReasonsResponse
     */
    final class AssetGroupEditorialReasonCollection
    {
        /**
         * A value that determines whether you can appeal the issues found by the editorial review.
         * @var AppealStatus
         */
        public $AppealStatus;

        /**
         * The identifier of the asset group that failed editorial review.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * The identifier of the associated campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * A list of AssetGroupEditorialReason objects that identify the component of an asset group that failed editorial review, and the reason for the failure.
         * @var AssetGroupEditorialReason[]
         */
        public $Reasons;
    }

}
