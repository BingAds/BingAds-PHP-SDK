<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Gets a list of insertion orders for the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/getinsertionordersbyaccount?view=bingads-12 GetInsertionOrdersByAccount Response Object
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
