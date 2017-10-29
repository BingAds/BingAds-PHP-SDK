<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Deletes a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/deleteuser?version=11 DeleteUser Request Object
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
