<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets ad group criterions by identifiers and types.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadgroupcriterionsbyids?view=bingads-11 GetAdGroupCriterionsByIds Request Object
     * 
     * @uses AdGroupCriterionType
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
         * Determines whether or not to return ad group criterions where the AgeRange or GenderType values are Unknown.
         * @var boolean
         */
        public $ReturnAgeGenderUnknownValue;

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
    }
}
