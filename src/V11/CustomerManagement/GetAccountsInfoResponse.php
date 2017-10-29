<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getaccountsinfo?version=11 GetAccountsInfo Response Object
     * 
     * @uses AccountInfo
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoResponse
    {
        /**
         * An array of AccountInfo objects that identifies the list of accounts that the customer owns.
         * @var AccountInfo[]
         */
        public $AccountsInfo;
    }
}
