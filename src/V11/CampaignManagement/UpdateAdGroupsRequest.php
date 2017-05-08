<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.110).aspx UpdateAdGroups Request Object
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
