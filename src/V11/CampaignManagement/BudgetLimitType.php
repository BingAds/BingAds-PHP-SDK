<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible budget types that you can specify for a campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/budgetlimittype?version=11 BudgetLimitType Value Set
     * 
     * @used-by Budget
     * @used-by Campaign
     */
    final class BudgetLimitType
    {
        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';
    }

}
