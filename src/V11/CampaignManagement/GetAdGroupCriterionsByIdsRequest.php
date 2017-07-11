<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.110).aspx GetAdGroupCriterionsByIds Request Object
     * 
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsRequest
    {
        public $AdGroupCriterionIds;
        public $AdGroupId;
        public $CriterionType;
    }
}
