<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversionvaluerulesbyids?view=bingads-13 GetConversionValueRulesByIds Response Object
     * 
     * @uses ConversionValueRule
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetConversionValueRulesByIds
     */
    final class GetConversionValueRulesByIdsResponse
    {
        /**
         * Reserved.
         * @var ConversionValueRule[]
         */
        public $ConversionValueRules;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
