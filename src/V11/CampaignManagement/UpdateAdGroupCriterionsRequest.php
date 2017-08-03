<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.110).aspx UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        public $AdGroupCriterions;
        public $CriterionType;
    }
}
