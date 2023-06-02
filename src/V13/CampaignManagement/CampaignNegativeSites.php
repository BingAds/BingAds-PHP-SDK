<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains the negative site URLs of a campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignnegativesites?view=bingads-13 CampaignNegativeSites Data Object
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
         * A list of URLs of the websites where you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

}
