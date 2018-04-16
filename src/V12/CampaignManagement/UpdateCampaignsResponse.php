<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatecampaigns?view=bingads-12 UpdateCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
