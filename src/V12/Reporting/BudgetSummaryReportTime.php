<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the date range values of a budget summary report request.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/budgetsummaryreporttime?view=bingads-12 BudgetSummaryReportTime Data Object
     * 
     * @uses Date
     * @uses ReportTimePeriod
     * @uses ReportTimeZone
     * @used-by BudgetSummaryReportRequest
     */
    final class BudgetSummaryReportTime
    {
        /**
         * The end date of a date range.
         * @var Date
         */
        public $CustomDateRangeEnd;

        /**
         * The start date of a date range.
         * @var Date
         */
        public $CustomDateRangeStart;

        /**
         * A predefined date range.
         * @var ReportTimePeriod
         */
        public $PredefinedTime;

        /**
         * Determines the time zone that you want the Reporting service to use for the requested time period.
         * @var ReportTimeZone
         */
        public $ReportTimeZone;
    }

}
