<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a date range object.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/daterange?version=11 DateRange Data Object
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
