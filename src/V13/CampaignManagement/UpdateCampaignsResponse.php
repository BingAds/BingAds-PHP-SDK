<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatecampaigns?view=bingads-13 UpdateCampaigns Response Object
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
