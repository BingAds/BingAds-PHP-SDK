<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more ad group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addadgroupcriterions?view=bingads-13 AddAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsRequest
    {
        /**
         * A list of ad group criterions.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of criterion to add, for example Webpage.
         * @var AdGroupCriterionType
         */
        public $CriterionType;
    }
}
