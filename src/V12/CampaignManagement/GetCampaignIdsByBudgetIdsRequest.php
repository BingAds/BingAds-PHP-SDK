<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaignidsbybudgetids?view=bingads-12 GetCampaignIdsByBudgetIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBudgetIds
     */
    final class GetCampaignIdsByBudgetIdsRequest
    {
        /**
         * A list of unique budget identifiers that identify the campaign identifiers to get.
         * @var integer[]
         */
        public $BudgetIds;
    }
}
