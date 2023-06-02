<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbudgets?view=bingads-13 AddBudgets Response Object
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
