<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the predefined time and date range values for a budget summary report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/budgetsummaryreporttimeperiod?version=11 BudgetSummaryReportTimePeriod Value Set
     * 
     * @used-by BudgetSummaryReportTime
     */
    final class BudgetSummaryReportTimePeriod
    {
        /** A cumulative report for the current day. */
        const Today = 'Today';

        /** A cumulative report for the previous day. */
        const Yesterday = 'Yesterday';

        /** A cumulative report for the previous seven days, having one row for each day. */
        const LastSevenDays = 'LastSevenDays';

        /** A cumulative report for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** A cumulative report for the previous calendar month. */
        const LastMonth = 'LastMonth';
    }

}
