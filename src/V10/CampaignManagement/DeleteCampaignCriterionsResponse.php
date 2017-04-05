<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
