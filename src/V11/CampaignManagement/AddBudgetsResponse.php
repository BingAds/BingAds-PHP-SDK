<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.110).aspx AddBudgets Response Object
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
