<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.110).aspx AddInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderRequest
    {
        /**
         * An insertion order to add to the account specified in the InsertionOrder object.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
