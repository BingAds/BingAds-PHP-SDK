<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.110).aspx AddAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsRequest
    {
        public $AdGroupCriterions;
        public $CriterionType;
    }
}
