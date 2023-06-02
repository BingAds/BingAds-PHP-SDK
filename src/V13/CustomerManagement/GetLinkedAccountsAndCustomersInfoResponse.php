<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the customer and account hierarchy under the specified customer.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Response Object
     * 
     * @uses AccountInfo
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoResponse
    {
        /**
         * The list of information about advertiser accounts that match the request criteria.
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
