<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
