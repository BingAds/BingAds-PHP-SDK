<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the details of a customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getcustomer?view=bingads-13 GetCustomer Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomer
     */
    final class GetCustomerRequest
    {
        /**
         * The identifier of the customer whose information you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
