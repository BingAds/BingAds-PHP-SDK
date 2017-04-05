<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines how your conversions are recorded within your chosen conversion window.
     * @link http://msdn.microsoft.com/en-us/library/mt759553(v=msads.100).aspx ConversionGoalCountType Value Set
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
