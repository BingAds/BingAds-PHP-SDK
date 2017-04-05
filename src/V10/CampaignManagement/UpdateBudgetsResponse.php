<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750544(v=msads.100).aspx UpdateBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
