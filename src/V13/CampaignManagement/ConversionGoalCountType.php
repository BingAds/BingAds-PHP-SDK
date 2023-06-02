<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines how your conversions are recorded within your chosen conversion window.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoalcounttype?view=bingads-13 ConversionGoalCountType Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalCountType
    {
        /** All conversions that happen after an ad click will be counted. */
        const All = 'All';

        /** Only one conversion that happens after an ad click will be counted. */
        const Unique = 'Unique';
    }

}
