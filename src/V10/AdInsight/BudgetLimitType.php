<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines the possible types of campaign budgets.
     * @link http://msdn.microsoft.com/en-us/library/mt219344(v=msads.100).aspx BudgetLimitType Value Set
     * 
     * @used-by BudgetOpportunity
     */
    final class BudgetLimitType
    {
        /** A monthly budget that is spent until it is depleted. */
        const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';

        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
    }

}
