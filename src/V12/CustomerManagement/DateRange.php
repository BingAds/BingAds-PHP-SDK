<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines a date range object.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/daterange?view=bingads-12 DateRange Data Object
     * 
     * @used-by SearchCustomersRequest
     */
    final class DateRange
    {
        /**
         * The minimum date.
         * @var string
         */
        public $MinDate;

        /**
         * The maximum date.
         * @var string
         */
        public $MaxDate;
    }

}
