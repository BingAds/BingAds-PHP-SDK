<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified conversion goals.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getconversiongoalsbyids?view=bingads-13 GetConversionGoalsByIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByIds
     */
    final class GetConversionGoalsByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the conversion goals that you want to get.
         * @var integer[]
         */
        public $ConversionGoalIds;

        /**
         * One or more types of conversion goals to return.
         * @var ConversionGoalType
         */
        public $ConversionGoalTypes;
    }
}
