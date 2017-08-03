<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to values within a conversion event goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759562(v=msads.100).aspx ValueOperator Value Set
     * 
     * @used-by EventGoal
     */
    final class ValueOperator
    {
        /** The property should be equal to the corresponding value. */
        const Equals = 'Equals';

        /** The property should be less than the corresponding value. */
        const LessThan = 'LessThan';

        /** The property should be greater than the corresponding value. */
        const GreaterThan = 'GreaterThan';
    }

}
