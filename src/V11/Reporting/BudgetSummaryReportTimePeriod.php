<?php
// Generated on 5/7/2017 5:48:04 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the predefined time and date range values for a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671612(v=msads.110).aspx BudgetSummaryReportTimePeriod Value Set
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
