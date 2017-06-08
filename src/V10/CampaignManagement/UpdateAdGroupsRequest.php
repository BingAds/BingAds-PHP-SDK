<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsRequest
    {
        /**
         * The identifier of the campaign that owns the ad groups to update.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array that can contain a maximum of 1,000 AdGroup objects to update.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * Determines whether or not the service should use the NativeBidAdjustment element of each specified AdGroup during update.
         * @var boolean
         */
        public $UpdateNativeBidAdjustment;
    }
}
