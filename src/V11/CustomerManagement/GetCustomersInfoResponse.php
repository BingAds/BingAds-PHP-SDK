<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.110).aspx GetCustomersInfo Response Object
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
