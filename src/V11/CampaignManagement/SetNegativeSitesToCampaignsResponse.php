<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setnegativesitestocampaigns?view=bingads-11 SetNegativeSitesToCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
