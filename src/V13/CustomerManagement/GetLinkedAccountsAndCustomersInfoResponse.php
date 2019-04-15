<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Response Object
     * 
     * @uses AccountInfo
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoResponse
    {
        /**
         * Reserved.
         * @var AccountInfo[]
         */
        public $AccountsInfo;

        /**
         * Reserved.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }
}
