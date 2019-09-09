<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the identifiers, names, and numbers of accounts that are accessible from the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccountsinfo?view=bingads-13 GetAccountsInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoRequest
    {
        /**
         * The identifier of the customer used to get the account information.
         * @var integer
         */
        public $CustomerId;

        /**
         * Determines whether to return only the advertiser accounts that belong to the customer or to also return linked advertiser accounts under other customers.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }
}
