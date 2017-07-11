<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.110).aspx GetAdGroupCriterionsByIds Response Object
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
