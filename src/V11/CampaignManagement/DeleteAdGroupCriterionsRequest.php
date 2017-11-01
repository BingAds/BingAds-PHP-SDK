<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteadgroupcriterions?view=bingads-11 DeleteAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        /**
         * A list of unique identifiers that identify the criterion to delete.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * The identifier of the ad group that owns the criterion to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The type of criterion to delete, for example Webpage.
         * @var AdGroupCriterionType
         */
        public $CriterionType;
    }
}
