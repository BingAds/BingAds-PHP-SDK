<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible types of campaign budgets.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/budgetlimittype?view=bingads-13 BudgetLimitType Value Set
     * 
     * @used-by BudgetOpportunity
     * @used-by CampaignBudgetRecommendation
     */
    final class BudgetLimitType
    {
        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';

        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
    }

}
