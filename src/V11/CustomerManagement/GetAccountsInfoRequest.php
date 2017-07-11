<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.110).aspx GetAccountsInfo Request Object
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
