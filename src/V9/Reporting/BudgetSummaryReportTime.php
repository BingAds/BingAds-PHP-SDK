<?php

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
        public $CustomDateRangeEnd;
        public $CustomDateRangeStart;
        public $PredefinedTime;
    }

}
