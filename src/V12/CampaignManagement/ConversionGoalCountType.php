<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines how your conversions are recorded within your chosen conversion window.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/conversiongoalcounttype?view=bingads-12 ConversionGoalCountType Value Set
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
