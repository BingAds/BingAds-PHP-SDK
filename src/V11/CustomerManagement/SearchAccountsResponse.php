<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for accounts that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743757(v=msads.110).aspx SearchAccounts Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsResponse
    {
        /**
         * A list of accounts that meet the specified criteria.
         * @var Account[]
         */
        public $Accounts;
    }
}
