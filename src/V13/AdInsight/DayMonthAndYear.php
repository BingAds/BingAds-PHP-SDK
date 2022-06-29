<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that you use to specify the start and end dates of a date range.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/daymonthandyear?view=bingads-13 DayMonthAndYear Data Object
     * 
     * @used-by AdGroupBidLandscape
     * @used-by DateRangeSearchParameter
     * @used-by HistoricalSearchCountPeriodic
     * @used-by KeywordBidLandscape
     * @used-by PerformanceInsightsDetail
     * @used-by GetHistoricalSearchCountRequest
     * @used-by GetPerformanceInsightsDetailDataByAccountIdRequest
     */
    final class DayMonthAndYear
    {
        /**
         * The day of the month.
         * @var integer
         */
        public $Day;

        /**
         * The month specified as an integer value in the range of 1 through 12, where 1 is January and 12 is December.
         * @var integer
         */
        public $Month;

        /**
         * The year specified as a four-digit integer value.
         * @var integer
         */
        public $Year;
    }

}
