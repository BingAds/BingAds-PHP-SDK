<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.110).aspx DeleteBudgets Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
    final class DeleteBudgetsRequest
    {
        /**
         * A maximum of 100 budget identifiers to delete from the account's shared budget library.
         * @var integer[]
         */
        public $BudgetIds;
    }
}
