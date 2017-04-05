<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
