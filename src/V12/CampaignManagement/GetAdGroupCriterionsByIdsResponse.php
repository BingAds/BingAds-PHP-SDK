<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getadgroupcriterionsbyids?view=bingads-12 GetAdGroupCriterionsByIds Response Object
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
