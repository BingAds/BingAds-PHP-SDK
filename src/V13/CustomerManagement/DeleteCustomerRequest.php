<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Deletes a customer.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/deletecustomer?view=bingads-13 DeleteCustomer Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteCustomer
     */
    final class DeleteCustomerRequest
    {
        /**
         * The identifier of the customer to delete.
         * @var integer
         */
        public $CustomerId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }
}
