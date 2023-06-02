<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatecampaigns?view=bingads-13 UpdateCampaigns Request Object
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
