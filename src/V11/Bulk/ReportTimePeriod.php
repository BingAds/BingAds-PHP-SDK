<?php
// Generated on 5/7/2017 5:48:19 AM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines the date range values for the requested performance data in a bulk download.
     * @link http://msdn.microsoft.com/en-us/library/dn249977(v=msads.110).aspx ReportTimePeriod Value Set
     * 
     * @used-by PerformanceStatsDateRange
     */
    final class ReportTimePeriod
    {
        /** Performance data for the current day. */
        const Today = 'Today';

        /** Performance data for the previous day. */
        const Yesterday = 'Yesterday';

        /** Performance data for the previous seven days, one row for each day. */
        const LastSevenDays = 'LastSevenDays';

        /** Performance data for the current calendar week. */
        const ThisWeek = 'ThisWeek';

        /** Performance data for the previous calendar week. */
        const LastWeek = 'LastWeek';

        /** Performance data for the four calendar weeks prior to today. */
        const LastFourWeeks = 'LastFourWeeks';

        /** Performance data for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** Performance data for the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** Performance data for the previous three calendar months. */
        const LastThreeMonths = 'LastThreeMonths';

        /** Performance data for the previous six calendar months. */
        const LastSixMonths = 'LastSixMonths';

        /** Performance data for the current calendar year. */
        const ThisYear = 'ThisYear';

        /** Performance data for the previous calendar year. */
        const LastYear = 'LastYear';
    }

}
