<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the BudgetSummaryReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671925(v=msads.90).aspx BudgetSummaryReportColumn Value Set
     * 
     * @used-by BudgetSummaryReportRequest
     */
    final class BudgetSummaryReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The date for the downloaded report records. */
        const Date = 'Date';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The average amount of campaign budget spent during a calendar month. */
        const MonthlyBudget = 'MonthlyBudget';

        /** The average amount of campaign budget spent per day. */
        const DailySpend = 'DailySpend';

        /** The amount of money spent to date for the month. */
        const MonthToDateSpend = 'MonthToDateSpend';
    }

}
