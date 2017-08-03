<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750544(v=msads.110).aspx UpdateBudgets Response Object
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
