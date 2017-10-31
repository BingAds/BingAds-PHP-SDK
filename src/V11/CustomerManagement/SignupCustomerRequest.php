<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Signs up a customer with Bing Ads.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/signupcustomer?view=bingads-11 SignupCustomer Request Object
     * 
     * @uses Customer
     * @uses Account
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerRequest
    {
        /**
         * A Customer that specifies the details of the customer that you are adding.
         * @var Customer
         */
        public $Customer;

        /**
         * An Account that specifies the details of the customer's primary account.
         * @var Account
         */
        public $Account;

        /**
         * The customer identifier of the reseller that will manage this customer.
         * @var integer
         */
        public $ParentCustomerId;

        /**
         * Determines  the type of customer application.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }
}
