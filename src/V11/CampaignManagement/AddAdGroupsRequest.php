<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addadgroups?version=11 AddAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsRequest
    {
        /**
         * The identifier of the campaign to add the ad groups to.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of AdGroup objects to add to the specified campaign.
         * @var AdGroup[]
         */
        public $AdGroups;
    }
}
