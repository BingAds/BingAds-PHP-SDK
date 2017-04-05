<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
