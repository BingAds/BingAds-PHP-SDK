<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.110).aspx GetAccount Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountResponse
    {
        /**
         * An account object that contains information about the account, such as payment method, account type, and parent customer.
         * @var Account
         */
        public $Account;
    }
}
