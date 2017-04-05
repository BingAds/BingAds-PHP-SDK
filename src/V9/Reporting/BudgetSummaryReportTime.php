<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the date range values of a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671928(v=msads.90).aspx BudgetSummaryReportTime Data Object
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
