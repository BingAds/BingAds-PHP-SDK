<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Deletes an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.110).aspx DeleteAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteAccount
     */
    final class DeleteAccountRequest
    {
        /**
         * The identifier of the account to delete.
         * @var integer
         */
        public $AccountId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }
}
