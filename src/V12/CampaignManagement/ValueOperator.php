<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to values within a conversion event goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/valueoperator?view=bingads-12 ValueOperator Value Set
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
