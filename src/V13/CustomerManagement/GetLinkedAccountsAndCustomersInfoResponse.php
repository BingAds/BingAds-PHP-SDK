<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the customer and account hierarchy under a specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Response Object
     * 
     * @uses AccountInfo
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoResponse
    {
        /**
         * The list of information about ad accounts that match the request criteria.
         * @var AccountInfo[]
         */
        public $AccountsInfo;

        /**
         * The list of information about customers that match the request criteria.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }
}
