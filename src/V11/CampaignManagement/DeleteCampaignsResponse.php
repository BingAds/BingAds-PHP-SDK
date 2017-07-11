<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.110).aspx DeleteCampaigns Response Object
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
