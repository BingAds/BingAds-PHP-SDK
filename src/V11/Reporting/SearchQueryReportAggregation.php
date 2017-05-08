<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the aggregation values that you can use in a search query performance report.
     * @link http://msdn.microsoft.com/en-us/library/ee703960(v=msads.110).aspx SearchQueryReportAggregation Value Set
     * 
     * @used-by SearchQueryPerformanceReportRequest
     */
    final class SearchQueryReportAggregation
    {
        /** The report data will be aggregated for the entire specified report time. */
        const Summary = 'Summary';

        /** The report data will be aggregated for each hour. */
        const Hourly = 'Hourly';

        /** The report data will be aggregated for each day. */
        const Daily = 'Daily';

        /** The report data will be aggregated for each week. */
        const Weekly = 'Weekly';

        /** The report data will be aggregated for each month. */
        const Monthly = 'Monthly';

        /** The report data will be aggregated for each year. */
        const Yearly = 'Yearly';

        /** The report data will be aggregated by each of the 24 hours in a day. */
        const HourOfDay = 'HourOfDay';

        /** The report data will be aggregated by each of the seven days in a week. */
        const DayOfWeek = 'DayOfWeek';
    }

}
