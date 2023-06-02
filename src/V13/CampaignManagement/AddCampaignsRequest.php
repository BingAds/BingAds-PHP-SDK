<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more campaigns to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addcampaigns?view=bingads-13 AddCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsRequest
    {
        /**
         * The identifier of the account to add the campaigns to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of campaigns to add to the specified account.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
