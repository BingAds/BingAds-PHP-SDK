<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Adds one or more campaigns to the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addcampaigns?view=bingads-12 AddCampaigns Request Object
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

        /**
         * Determines whether or not to apply the target Source for Dynamic Search Ads campaign settings.
         * @var boolean
         */
        public $IncludeDynamicSearchAdsSource;
    }
}
