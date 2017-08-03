<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a date range object.
     * @link http://msdn.microsoft.com/en-us/library/dn452056(v=msads.90).aspx DateRange Data Object
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
