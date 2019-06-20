<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new budgets to the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addbudgets?view=bingads-13 AddBudgets Request Object
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
