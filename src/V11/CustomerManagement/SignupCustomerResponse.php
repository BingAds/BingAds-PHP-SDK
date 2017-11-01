<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Signs up a customer with Bing Ads.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/signupcustomer?view=bingads-11 SignupCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerResponse
    {
        /**
         * A system-generated customer identifier corresponding to the new customer specified in the request.
         * @var integer
         */
        public $CustomerId;

        /**
         * A system-generated customer number that is used in the Bing Ads web application.
         * @var string
         */
        public $CustomerNumber;

        /**
         * A system-generated account identifier corresponding to the new account specified in the request.
         * @var integer
         */
        public $AccountId;

        /**
         * A system-generated account number that is used to identify the account in the Bing Ads web application.
         * @var string
         */
        public $AccountNumber;

        /**
         * The date and time that the account was added.
         * @var \DateTime
         */
        public $CreateTime;
    }
}
