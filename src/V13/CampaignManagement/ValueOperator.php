<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to values within a conversion event goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/valueoperator?view=bingads-13 ValueOperator Value Set
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
