<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt219325(v=msads.100).aspx HistoricalSearchCountPeriodic Data Object
     * 
     * @uses DayMonthAndYear
     * @used-by SearchCountsByAttributes
     */
    final class HistoricalSearchCountPeriodic
    {
        /**
         * The number of times that the keyword was used in a search query on the specified device type during the time period.
         * @var integer
         */
        public $SearchCount;

        /**
         * The time period in which the count was captured.
         * @var DayMonthAndYear
         */
        public $DayMonthAndYear;
    }

}
