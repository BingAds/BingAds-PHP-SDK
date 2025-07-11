<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets conversion value rules by their IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversionvaluerulesbyids?view=bingads-13 GetConversionValueRulesByIds Response Object
     * 
     * @uses ConversionValueRule
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetConversionValueRulesByIds
     */
    final class GetConversionValueRulesByIdsResponse
    {
        /**
         * The conversion value rules that were succesfully fetched.
         * @var ConversionValueRule[]
         */
        public $ConversionValueRules;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
