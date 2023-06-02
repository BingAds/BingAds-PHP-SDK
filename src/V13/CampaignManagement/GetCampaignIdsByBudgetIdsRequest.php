<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignidsbybudgetids?view=bingads-13 GetCampaignIdsByBudgetIds Request Object
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
