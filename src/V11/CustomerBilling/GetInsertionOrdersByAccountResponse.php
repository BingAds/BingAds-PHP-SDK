<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets a list of insertion orders for the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/getinsertionordersbyaccount?version=11 GetInsertionOrdersByAccount Response Object
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
