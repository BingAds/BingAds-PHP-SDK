<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Searches for insertion orders that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743759(v=msads.90).aspx SearchInsertionOrders Response Object
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
