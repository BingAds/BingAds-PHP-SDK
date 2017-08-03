<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
