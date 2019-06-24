<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccountsinfo?view=bingads-12 GetAccountsInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoRequest
    {
        /**
         * The identifier of the customer who owns the accounts to get.
         * @var integer
         */
        public $CustomerId;

        /**
         * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }
}
