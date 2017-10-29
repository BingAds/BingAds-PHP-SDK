<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Searches for insertion orders that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/searchinsertionorders?version=11 SearchInsertionOrders Response Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
     */
    final class SearchInsertionOrdersResponse
    {
        /**
         * A  list of insertion orders that meet the specified criteria.
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }
}
