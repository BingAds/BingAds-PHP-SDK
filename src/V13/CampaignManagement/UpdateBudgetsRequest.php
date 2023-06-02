<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebudgets?view=bingads-13 UpdateBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsRequest
    {
        /**
         * An array of Budget objects to update in the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }
}
