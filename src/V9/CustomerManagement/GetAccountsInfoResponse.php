<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfo Response Object
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
