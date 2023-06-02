<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified conversion goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversiongoalsbyids?view=bingads-13 GetConversionGoalsByIds Request Object
     * 
     * @uses ConversionGoalType
     * @uses ConversionGoalAdditionalField
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
         * The type of conversion goals to return.
         * @var ConversionGoalType
         */
        public $ConversionGoalTypes;

        /**
         * The list of additional properties that you want included within each returned conversion goal.
         * @var ConversionGoalAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
