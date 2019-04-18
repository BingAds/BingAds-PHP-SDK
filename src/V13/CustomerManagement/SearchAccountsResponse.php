<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for accounts that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchaccounts?view=bingads-13 SearchAccounts Response Object
     * 
     * @uses AdvertiserAccount
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsResponse
    {
        /**
         * A list of accounts that meet the specified criteria.
         * @var AdvertiserAccount[]
         */
        public $Accounts;
    }
}
