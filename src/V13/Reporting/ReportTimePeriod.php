<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the predefined time and date range values for a report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/reporttimeperiod?view=bingads-13 ReportTimePeriod Value Set
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

        /** A cumulative report for the current week that runs from Sunday through Saturday. */
        const ThisWeek = 'ThisWeek';

        /** A cumulative report for the previous week that runs from Sunday through Saturday. */
        const LastWeek = 'LastWeek';

        /** A cumulative report for the previous 14 days. */
        const Last14Days = 'Last14Days';

        /** A cumulative report for the previous 30 days. */
        const Last30Days = 'Last30Days';

        /** A cumulative report for the previous four weeks that run from Sunday through Saturday. */
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

        /** A cumulative report for the current week that runs from Monday through Sunday. */
        const ThisWeekStartingMonday = 'ThisWeekStartingMonday';

        /** A cumulative report for the previous week that runs from Monday through Sunday. */
        const LastWeekStartingMonday = 'LastWeekStartingMonday';

        /** A cumulative report for the previous four weeks that run from Monday through Sunday. */
        const LastFourWeeksStartingMonday = 'LastFourWeeksStartingMonday';
    }

}
