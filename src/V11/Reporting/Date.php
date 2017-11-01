<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a calendar date by month, day, and year.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/date?view=bingads-11 Date Data Object
     * 
     * @used-by BudgetSummaryReportTime
     * @used-by ReportTime
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

}
