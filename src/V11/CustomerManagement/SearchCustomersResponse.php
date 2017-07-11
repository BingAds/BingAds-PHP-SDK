<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for customers that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.110).aspx SearchCustomers Response Object
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
