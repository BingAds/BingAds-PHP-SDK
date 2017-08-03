<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.110).aspx FindAccounts Response Object
     * 
     * @uses AccountInfo
     * @used-by BingAdsCustomerManagementService::FindAccounts
     */
    final class FindAccountsResponse
    {
        /**
         * A list of AccountInfo objects of the accounts that match the specified filter criteria.
         * @var AccountInfo[]
         */
        public $AccountsInfo;
    }
}
