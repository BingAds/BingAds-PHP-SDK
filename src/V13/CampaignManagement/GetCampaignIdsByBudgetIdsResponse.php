<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignidsbybudgetids?view=bingads-13 GetCampaignIdsByBudgetIds Response Object
     * 
     * @uses IdCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBudgetIds
     */
    final class GetCampaignIdsByBudgetIdsResponse
    {
        /**
         * The list of campaign id collections that corresponds directly to the budget identifiers that you specified in the request.
         * @var IdCollection[]
         */
        public $CampaignIdCollection;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
