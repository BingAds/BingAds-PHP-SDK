<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateadgroups?view=bingads-13 UpdateAdGroups Request Object
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
         * Determines whether or not the service should use the AudienceAdsBidAdjustment element of each specified AdGroup during update.
         * @var boolean
         */
        public $UpdateAudienceAdsBidAdjustment;

        /**
         * Reserved for future use.
         * @var boolean
         */
        public $ReturnInheritedBidStrategyTypes;
    }
}
