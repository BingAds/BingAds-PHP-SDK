<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbudgetsbyids?view=bingads-11 GetBudgetsByIds Request Object
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
