<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addadgroups?view=bingads-13 AddAdGroups Request Object
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

        /**
         * Reserved for future use.
         * @var boolean
         */
        public $ReturnInheritedBidStrategyTypes;
    }
}
