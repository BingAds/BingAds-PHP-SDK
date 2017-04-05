<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.90).aspx AddInsertionOrder Request Object
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
