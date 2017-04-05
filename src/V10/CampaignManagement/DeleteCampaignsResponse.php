<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
