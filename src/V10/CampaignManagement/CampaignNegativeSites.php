<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that contains the negative site URLs of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.100).aspx CampaignNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by SetNegativeSitesToCampaignsRequest
     */
    final class CampaignNegativeSites
    {
        /**
         * The identifier of the campaign to which the negative site URLs belong.
         * @var integer
         */
        public $CampaignId;

        /**
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

}
