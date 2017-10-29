<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for accounts that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchaccounts?version=11 SearchAccounts Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsResponse
    {
        /**
         * A  list of accounts that meet the specified criteria.
         * @var Account[]
         */
        public $Accounts;
    }
}
