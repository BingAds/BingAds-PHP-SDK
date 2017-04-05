<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account that owns the criterions to update.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of criterions to update.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of ad group criterion to update, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }
}
