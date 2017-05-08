<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750545(v=msads.110).aspx GetBudgetsByIds Response Object
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
