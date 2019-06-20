<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Searches for insertion orders that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/searchinsertionorders?view=bingads-13 SearchInsertionOrders Response Object
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
