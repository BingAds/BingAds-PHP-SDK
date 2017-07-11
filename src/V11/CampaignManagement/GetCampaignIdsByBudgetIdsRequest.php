<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link http://msdn.microsoft.com/en-us/library/mt750549(v=msads.110).aspx GetCampaignIdsByBudgetIds Request Object
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
