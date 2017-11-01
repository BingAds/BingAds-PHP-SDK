<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadgroupcriterionsbyids?view=bingads-11 GetAdGroupCriterionsByIds Response Object
     * 
     * @uses AdGroupCriterion
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsResponse
    {
        /**
         * The list of criterions that correspond directly to the identifiers specified in the request.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;
    }
}
