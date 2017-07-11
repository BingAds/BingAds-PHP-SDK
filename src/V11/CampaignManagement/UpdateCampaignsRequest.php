<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.110).aspx UpdateCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaign to update.
         * @var integer
         */
        public $AccountId;

        /**
         * An array that can contain a maximum of 100 Campaign objects to update.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
