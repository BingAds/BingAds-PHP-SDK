<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update the status of the specified conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerulesstatus?view=bingads-13 UpdateConversionValueRulesStatus Request Object
     * 
     * @uses ConversionValueRuleStatus
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRulesStatus
     */
    final class UpdateConversionValueRulesStatusRequest
    {
        /**
         * Update the status of the conversion value rules with these IDs.
         * @var integer[]
         */
        public $RuleIds;

        /**
         * The new status to be applied to the specified conversion value rules.
         * @var ConversionValueRuleStatus
         */
        public $Status;
    }
}
