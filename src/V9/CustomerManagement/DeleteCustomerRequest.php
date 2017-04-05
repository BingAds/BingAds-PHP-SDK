<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Deletes a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomer Request Object
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
