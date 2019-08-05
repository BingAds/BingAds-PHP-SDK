<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the identifiers and names of customers that are accessible to the current authenticated user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getcustomersinfo?view=bingads-13 GetCustomersInfo Response Object
     * 
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetCustomersInfo
     */
    final class GetCustomersInfoResponse
    {
        /**
         * The list of information about customers that match the request criteria.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }
}
