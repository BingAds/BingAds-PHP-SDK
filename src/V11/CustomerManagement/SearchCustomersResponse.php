<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for customers that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchcustomers?version=11 SearchCustomers Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersResponse
    {
        /**
         * A  list of customers that meet the specified criteria.
         * @var Customer[]
         */
        public $Customers;
    }
}
