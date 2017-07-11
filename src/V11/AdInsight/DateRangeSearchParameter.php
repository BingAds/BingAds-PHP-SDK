<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The date range search parameter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt803151(v=msads.110).aspx DateRangeSearchParameter Data Object
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
