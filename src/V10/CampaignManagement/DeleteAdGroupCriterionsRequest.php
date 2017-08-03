<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account that owns the criterion to delete.
         * @var integer
         */
        public $AccountId;

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
         * The type of ad group criterion to delete, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }
}
