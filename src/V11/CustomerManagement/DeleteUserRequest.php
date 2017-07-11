<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Deletes a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.110).aspx DeleteUser Request Object
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
