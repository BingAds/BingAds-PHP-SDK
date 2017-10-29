<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updatecustomer?version=11 UpdateCustomer Request Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::UpdateCustomer
     */
    final class UpdateCustomerRequest
    {
        /**
         * A customer object that contains the updated customer information.
         * @var Customer
         */
        public $Customer;
    }
}
