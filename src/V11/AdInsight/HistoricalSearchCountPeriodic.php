<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt219325(v=msads.110).aspx HistoricalSearchCountPeriodic Data Object
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
