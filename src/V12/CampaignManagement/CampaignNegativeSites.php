<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that contains the negative site URLs of a campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/campaignnegativesites?view=bingads-12 CampaignNegativeSites Data Object
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
