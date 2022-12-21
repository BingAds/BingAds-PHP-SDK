<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines an object that contains a customer's identifier and name.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/customerinfo?view=bingads-13 CustomerInfo Data Object
     * 
     * @used-by AdvertiserAccount
     */
    final class CustomerInfo
    {
        /**
         * The system-generated identifier of the customer.
         * @var integer
         */
        public $Id;

        /**
         * The name of the customer.
         * @var string
         */
        public $Name;
    }

}
