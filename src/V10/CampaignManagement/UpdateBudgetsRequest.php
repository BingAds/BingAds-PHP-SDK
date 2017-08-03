<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750544(v=msads.100).aspx UpdateBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsRequest
    {
        /**
         * An array of Budget objects to update in the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }
}
