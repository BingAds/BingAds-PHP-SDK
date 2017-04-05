<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Deletes an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccount Request Object
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
