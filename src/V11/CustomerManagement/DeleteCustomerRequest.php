<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Deletes a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.110).aspx DeleteCustomer Request Object
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
