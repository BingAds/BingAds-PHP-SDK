<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Updates the details of the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomer Request Object
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
