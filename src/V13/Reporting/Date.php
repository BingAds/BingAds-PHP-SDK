<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a calendar date by month, day, and year.
     * @link https:/learn.microsoft.com/advertising/reporting-service/date?view=bingads-13 Date Data Object
     * 
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
