<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Searches for customers that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomers Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersResponse
    {
        /**
         * A list of customers that meet the specified criteria.
         * @var Customer[]
         */
        public $Customers;
    }
}
