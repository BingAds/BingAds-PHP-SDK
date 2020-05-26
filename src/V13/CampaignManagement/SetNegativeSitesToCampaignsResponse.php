<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the negative site URLs directly to campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setnegativesitestocampaigns?view=bingads-13 SetNegativeSitesToCampaigns Response Object
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
