<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible values of a campaign budget point.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/budgetpointtype?view=bingads-13 BudgetPointType Value Set
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
