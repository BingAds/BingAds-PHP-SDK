<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Searches for insertion orders that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743759(v=msads.110).aspx SearchInsertionOrders Response Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
     */
    final class SearchInsertionOrdersResponse
    {
        /**
         * A list of insertion orders that meet the specified criteria.
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }
}
