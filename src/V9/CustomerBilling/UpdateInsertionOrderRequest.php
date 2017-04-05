<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.90).aspx UpdateInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderRequest
    {
        /**
         * An insertion order to update within the account specified in the InsertionOrder object.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
