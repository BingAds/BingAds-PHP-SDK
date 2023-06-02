<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebudgets?view=bingads-13 DeleteBudgets Request Object
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
