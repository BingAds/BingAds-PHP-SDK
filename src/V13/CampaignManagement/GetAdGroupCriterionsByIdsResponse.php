<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadgroupcriterionsbyids?view=bingads-13 GetAdGroupCriterionsByIds Response Object
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
