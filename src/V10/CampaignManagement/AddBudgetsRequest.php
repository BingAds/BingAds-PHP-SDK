<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.100).aspx AddBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::AddBudgets
     */
    final class AddBudgetsRequest
    {
        /**
         * An array of Budget objects to add to the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }
}
