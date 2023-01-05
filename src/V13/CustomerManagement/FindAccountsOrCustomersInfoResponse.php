<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/findaccountsorcustomersinfo?view=bingads-13 FindAccountsOrCustomersInfo Response Object
     * 
     * @uses AccountInfoWithCustomerData
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoResponse
    {
        /**
         * A list of AccountInfoWithCustomerData objects of the accounts and customers that match the specified filter criteria.
         * @var AccountInfoWithCustomerData[]
         */
        public $AccountInfoWithCustomerData;
    }
}
