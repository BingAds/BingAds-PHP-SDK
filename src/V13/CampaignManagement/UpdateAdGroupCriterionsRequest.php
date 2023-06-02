<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateadgroupcriterions?view=bingads-13 UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        /**
         * The list of criterions to update.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of criterion to update, for example Webpage.
         * @var AdGroupCriterionType
         */
        public $CriterionType;
    }
}
