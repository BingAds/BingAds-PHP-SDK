<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the conversion value rule status value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversionvaluerulestatus?view=bingads-13 ConversionValueRuleStatus Value Set
     * 
     * @used-by ConversionValueRule
     * @used-by UpdateConversionValueRulesStatusRequest
     */
    final class ConversionValueRuleStatus
    {
        /** The rule is active. */
        const Active = 'Active';

        /** The rule is paused. */
        const Paused = 'Paused';

        /** The rule is deleted. */
        const Deleted = 'Deleted';

        /** The rule is invalid. */
        const Invalid = 'Invalid';
    }

}
