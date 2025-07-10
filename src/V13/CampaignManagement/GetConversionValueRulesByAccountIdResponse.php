<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets conversion value rules by the account ID.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversionvaluerulesbyaccountid?view=bingads-13 GetConversionValueRulesByAccountId Response Object
     * 
     * @uses ConversionValueRule
     * @used-by BingAdsCampaignManagementService::GetConversionValueRulesByAccountId
     */
    final class GetConversionValueRulesByAccountIdResponse
    {
        /**
         * The conversion value rules associated with the specified account ID.
         * @var ConversionValueRule[]
         */
        public $ConversionValueRules;
    }
}
