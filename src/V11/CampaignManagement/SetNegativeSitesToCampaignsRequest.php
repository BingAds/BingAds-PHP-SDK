<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.110).aspx SetNegativeSitesToCampaigns Request Object
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
