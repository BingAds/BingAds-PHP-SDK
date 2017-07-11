<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.110).aspx UpdateAdGroups Response Object
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
