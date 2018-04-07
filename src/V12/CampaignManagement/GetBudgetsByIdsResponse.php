<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbudgetsbyids?view=bingads-12 GetBudgetsByIds Response Object
     * 
     * @uses Budget
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBudgetsByIds
     */
    final class GetBudgetsByIdsResponse
    {
        /**
         * An array of Budget objects that corresponds directly to the budget identifiers that you specified in the request.
         * @var Budget[]
         */
        public $Budgets;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
