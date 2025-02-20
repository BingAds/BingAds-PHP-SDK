<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversionvaluerulestatus?view=bingads-13 ConversionValueRuleStatus Value Set
     * 
     * @used-by ConversionValueRule
     * @used-by UpdateConversionValueRulesStatusRequest
     */
    final class ConversionValueRuleStatus
    {
        /** Reserved. */
        const Active = 'Active';

        /** Reserved. */
        const Paused = 'Paused';

        /** Reserved. */
        const Deleted = 'Deleted';

        /** Reserved. */
        const Invalid = 'Invalid';
    }

}
