<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadgroupcriterions?view=bingads-13 DeleteAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        /**
         * A list of unique identifiers that identify the criterions to delete.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * The identifier of the ad group that has the criterions you want to delete.
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
