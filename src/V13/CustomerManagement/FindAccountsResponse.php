<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/findaccounts?view=bingads-13 FindAccounts Response Object
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
