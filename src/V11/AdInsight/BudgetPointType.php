<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible values of a campaign budget point.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/budgetpointtype?version=11 BudgetPointType Value Set
     * 
     * @used-by BudgetPoint
     */
    final class BudgetPointType
    {
        /** The budget point includes the current budget. */
        const Current = 'Current';

        /** The budget point includes the optimal suggested budget. */
        const Suggested = 'Suggested';

        /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
        const Maximum = 'Maximum';

        /** The budget point includes a proposed budget other than current, maximum, or suggested. */
        const Other = 'Other';
    }

}
