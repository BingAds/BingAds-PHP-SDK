<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatecampaigns?view=bingads-12 UpdateCampaigns Request Object
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

        /**
         * Determines whether or not to apply the target Source for Dynamic Search Ads campaign settings.
         * @var boolean
         */
        public $IncludeDynamicSearchAdsSource;
    }
}
