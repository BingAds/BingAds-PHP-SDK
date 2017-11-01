<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a customer identification object that contains information that identifies a customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/customerinfo?view=bingads-11 CustomerInfo Data Object
     * 
     * @used-by AdvertiserAccount
     * @used-by GetCustomersInfoResponse
     */
    final class CustomerInfo
    {
        /**
         * The system generated identifier of the customer.
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
