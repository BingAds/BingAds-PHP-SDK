<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Request Object
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
