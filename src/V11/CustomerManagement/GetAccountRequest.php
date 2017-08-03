<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.110).aspx GetAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountRequest
    {
        /**
         * The identifier of the account to get.
         * @var integer
         */
        public $AccountId;
    }
}
