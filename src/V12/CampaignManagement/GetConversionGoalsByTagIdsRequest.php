<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getconversiongoalsbytagids?view=bingads-12 GetConversionGoalsByTagIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByTagIds
     */
    final class GetConversionGoalsByTagIdsRequest
    {
        /**
         * A maximum of 100 tag identifiers that are used by the returned conversion goals.
         * @var integer[]
         */
        public $TagIds;

        /**
         * One or more types of conversion goals to return.
         * @var ConversionGoalType
         */
        public $ConversionGoalTypes;
    }
}
