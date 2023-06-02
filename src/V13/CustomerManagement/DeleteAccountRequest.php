<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Deletes an account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/deleteaccount?view=bingads-13 DeleteAccount Request Object
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
