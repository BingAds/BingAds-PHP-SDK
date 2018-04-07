<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getcustomersinfo?view=bingads-12 GetCustomersInfo Response Object
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
