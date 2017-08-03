<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsRequest
    {
        /**
         * The identifier of the account that owns the criterions to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of unique identifiers that identify the criterions to get.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * The identifier of the ad group that owns the criterions to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The type of ad group criterions to get, for example ProductPartition or Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }
}
