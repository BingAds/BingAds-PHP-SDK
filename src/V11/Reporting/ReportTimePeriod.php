<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the predefined time and date range values for a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reporttimeperiod?view=bingads-11 ReportTimePeriod Value Set
     * 
     * @used-by ReportTime
     */
    final class ReportTimePeriod
    {
        /** A cumulative report for the current day. */
        const Today = 'Today';

        /** A cumulative report for the previous day. */
        const Yesterday = 'Yesterday';

        /** A cumulative report for the previous seven days. */
        const LastSevenDays = 'LastSevenDays';

        /** A cumulative report for the current calendar week. */
        const ThisWeek = 'ThisWeek';

        /** A cumulative report for the previous calendar week. */
        const LastWeek = 'LastWeek';

        /** A cumulative report for the four calendar weeks prior to today. */
        const LastFourWeeks = 'LastFourWeeks';

        /** A cumulative report for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** A cumulative report for the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** A cumulative report for the previous three calendar months. */
        const LastThreeMonths = 'LastThreeMonths';

        /** A cumulative report for the previous six calendar months. */
        const LastSixMonths = 'LastSixMonths';

        /** A cumulative report for the current calendar year. */
        const ThisYear = 'ThisYear';

        /** A cumulative report for the previous calendar year. */
        const LastYear = 'LastYear';
    }

}
