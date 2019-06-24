<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/historicalsearchcountperiodic?view=bingads-13 HistoricalSearchCountPeriodic Data Object
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
