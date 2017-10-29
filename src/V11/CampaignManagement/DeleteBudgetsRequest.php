<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletebudgets?version=11 DeleteBudgets Request Object
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
