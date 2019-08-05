<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the identifiers, names, and numbers of accounts that are accessible from the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccountsinfo?view=bingads-13 GetAccountsInfo Response Object
     * 
     * @uses AccountInfo
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoResponse
    {
        /**
         * The list of information about ad accounts that match the request criteria.
         * @var AccountInfo[]
         */
        public $AccountsInfo;
    }
}
