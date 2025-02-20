<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerulesstatus?view=bingads-13 UpdateConversionValueRulesStatus Request Object
     * 
     * @uses ConversionValueRuleStatus
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRulesStatus
     */
    final class UpdateConversionValueRulesStatusRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $RuleIds;

        /**
         * Reserved.
         * @var ConversionValueRuleStatus
         */
        public $Status;
    }
}
