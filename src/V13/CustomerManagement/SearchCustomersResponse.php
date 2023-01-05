<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for customers that match the request criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchcustomers?view=bingads-13 SearchCustomers Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersResponse
    {
        /**
         * A  list of customers that meet the request criteria.
         * @var Customer[]
         */
        public $Customers;
    }
}
