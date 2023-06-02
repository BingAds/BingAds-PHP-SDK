<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines an object that contains a customer's identifier and name.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/customerinfo?view=bingads-13 CustomerInfo Data Object
     * 
     * @used-by AdvertiserAccount
     * @used-by GetCustomersInfoResponse
     * @used-by GetLinkedAccountsAndCustomersInfoResponse
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
