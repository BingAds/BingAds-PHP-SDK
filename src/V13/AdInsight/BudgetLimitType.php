<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible types of campaign budgets.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/budgetlimittype?view=bingads-13 BudgetLimitType Value Set
     * 
     * @used-by BudgetOpportunity
     */
    final class BudgetLimitType
    {
        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';

        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
    }

}
