<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Reserved for future use.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Response Object
     * 
     * @uses AccountInfo
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoResponse
    {
        /**
         * Reserved for future use.
         * @var AccountInfo[]
         */
        public $AccountsInfo;

        /**
         * Reserved for future use.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }
}
