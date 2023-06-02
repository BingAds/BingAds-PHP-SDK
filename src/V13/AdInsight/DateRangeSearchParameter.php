<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The date range search parameter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/daterangesearchparameter?view=bingads-13 DateRangeSearchParameter Data Object
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
