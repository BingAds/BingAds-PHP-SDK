<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750545(v=msads.100).aspx GetBudgetsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBudgetsByIds
     */
    final class GetBudgetsByIdsRequest
    {
        /**
         * A list of unique budget identifiers that identify the budgets to get.
         * @var integer[]
         */
        public $BudgetIds;
    }
}
