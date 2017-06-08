<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible types of campaign budgets.
     * @link http://msdn.microsoft.com/en-us/library/mt219344(v=msads.110).aspx BudgetLimitType Value Set
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
