<?php

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Gets a list of insertion orders for the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Response Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountResponse
    {
        /**
         * A list of insertion orders.
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }
}
