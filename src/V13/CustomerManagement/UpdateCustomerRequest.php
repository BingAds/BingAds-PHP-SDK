<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified customer.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updatecustomer?view=bingads-13 UpdateCustomer Request Object
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
