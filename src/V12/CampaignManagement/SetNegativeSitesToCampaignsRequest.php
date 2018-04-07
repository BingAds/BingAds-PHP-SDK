<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setnegativesitestocampaigns?view=bingads-12 SetNegativeSitesToCampaigns Request Object
     * 
     * @uses CampaignNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaigns.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
         * @var CampaignNegativeSites[]
         */
        public $CampaignNegativeSites;
    }
}
