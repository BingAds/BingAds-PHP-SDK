<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.110).aspx AddBudgets Request Object
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
