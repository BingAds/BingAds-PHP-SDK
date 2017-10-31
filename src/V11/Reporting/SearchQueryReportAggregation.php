<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the aggregation values that you can use in a search query performance report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/searchqueryreportaggregation?view=bingads-11 SearchQueryReportAggregation Value Set
     * 
     * @used-by DSASearchQueryPerformanceReportRequest
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
