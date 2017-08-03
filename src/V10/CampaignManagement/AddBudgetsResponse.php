<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.100).aspx AddBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBudgets
     */
    final class AddBudgetsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the budgets that were added.
         * @var integer[]
         */
        public $BudgetIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
