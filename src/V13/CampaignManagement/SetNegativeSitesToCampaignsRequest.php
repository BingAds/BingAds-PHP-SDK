<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the negative site URLs directly to campaigns.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setnegativesitestocampaigns?view=bingads-13 SetNegativeSitesToCampaigns Request Object
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
