<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Request Object
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
