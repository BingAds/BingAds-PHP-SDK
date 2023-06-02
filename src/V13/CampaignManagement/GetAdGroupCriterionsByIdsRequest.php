<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadgroupcriterionsbyids?view=bingads-13 GetAdGroupCriterionsByIds Request Object
     * 
     * @uses AdGroupCriterionType
     * @uses CriterionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsRequest
    {
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
         * The type of criterion to get, for example Webpage.
         * @var AdGroupCriterionType
         */
        public $CriterionType;

        /**
         * The list of additional properties that you want included within each returned ad group criterion.
         * @var CriterionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
