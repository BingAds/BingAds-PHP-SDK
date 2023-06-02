<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes budgets from the account's shared budget library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebudgets?view=bingads-13 DeleteBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
    final class DeleteBudgetsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
