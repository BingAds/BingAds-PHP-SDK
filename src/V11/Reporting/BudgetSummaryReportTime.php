<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the date range values of a budget summary report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/budgetsummaryreporttime?view=bingads-11 BudgetSummaryReportTime Data Object
     * 
     * @uses Date
     * @uses BudgetSummaryReportTimePeriod
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
         * @var BudgetSummaryReportTimePeriod
         */
        public $PredefinedTime;
    }

}
