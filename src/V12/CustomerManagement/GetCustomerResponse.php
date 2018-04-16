<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets the details of a customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getcustomer?view=bingads-12 GetCustomer Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::GetCustomer
     */
    final class GetCustomerResponse
    {
        /**
         * A Customer object that contains information about the customer.
         * @var Customer
         */
        public $Customer;
    }
}
