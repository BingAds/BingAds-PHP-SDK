<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account to add the criterions to.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of ad group criterions.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of ad group criterion to add, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }
}
