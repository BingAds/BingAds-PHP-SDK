<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Response Object
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
