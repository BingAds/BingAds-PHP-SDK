<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines how your conversions are recorded within your chosen conversion window.
     * @link http://msdn.microsoft.com/en-us/library/mt759553(v=msads.110).aspx ConversionGoalCountType Value Set
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
