<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Response Object
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
