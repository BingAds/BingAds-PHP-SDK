<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The date range search parameter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/daterangesearchparameter?version=11 DateRangeSearchParameter Data Object
     * 
     * @uses DayMonthAndYear
     */
    final class DateRangeSearchParameter extends SearchParameter
    {
        /**
         * The end date range of monthly search counts for the returned keyword ideas.
         * @var DayMonthAndYear
         */
        public $EndDate;

        /**
         * The start date range of monthly search counts for the returned keyword ideas.
         * @var DayMonthAndYear
         */
        public $StartDate;
    }

}
