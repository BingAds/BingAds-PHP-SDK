<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversiongoalsbytagids?view=bingads-13 GetConversionGoalsByTagIds Request Object
     * 
     * @uses ConversionGoalType
     * @uses ConversionGoalAdditionalField
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
