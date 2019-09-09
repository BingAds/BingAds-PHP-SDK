<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets the identifiers and names of customers that are accessible to the current authenticated user
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getcustomersinfo?view=bingads-12 GetCustomersInfo Response Object
     * 
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetCustomersInfo
     */
    final class GetCustomersInfoResponse
    {
        /**
         * An array of CustomerInfo objects that identifies the list of customers that meet the filter criteria.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }
}
