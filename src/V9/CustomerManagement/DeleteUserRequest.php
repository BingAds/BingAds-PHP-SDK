<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Deletes a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUser Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteUser
     */
    final class DeleteUserRequest
    {
        /**
         * The identifier of the user to delete.
         * @var integer
         */
        public $UserId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }
}
