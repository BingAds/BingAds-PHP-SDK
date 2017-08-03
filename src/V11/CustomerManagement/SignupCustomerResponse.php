<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Signs up a customer with Bing Ads.
     * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.110).aspx SignupCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerResponse
    {
        public $CustomerId;
        public $CustomerNumber;
        public $AccountId;
        public $AccountNumber;
        public $CreateTime;
    }
}
