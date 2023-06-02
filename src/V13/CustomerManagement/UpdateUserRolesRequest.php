<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the roles of the specified user.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateuserroles?view=bingads-13 UpdateUserRoles Request Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUserRoles
     */
    final class UpdateUserRolesRequest
    {
        /**
         * The identifier of the customer to which the user belongs.
         * @var integer
         */
        public $CustomerId;

        /**
         * The identifier of the user whose role you want to update.
         * @var integer
         */
        public $UserId;

        /**
         * The identifier of the role to which the values specified in the NewAccountIds or NewCustomerIds element applies to, if set.
         * @var integer
         */
        public $NewRoleId;

        /**
         * An array of identifiers of the accounts to restrict the user to.
         * @var integer[]
         */
        public $NewAccountIds;

        /**
         * An array of identifiers of the customers to restrict the user to.
         * @var integer[]
         */
        public $NewCustomerIds;

        /**
         * The identifier of the role to which the values specified in the DeleteAccountIds or DeleteCustomerIds element applies, if set.
         * @var integer
         */
        public $DeleteRoleId;

        /**
         * An array of identifiers of the accounts to remove from the list of accounts that the user can manage.
         * @var integer[]
         */
        public $DeleteAccountIds;

        /**
         * An array of identifiers of the customers to remove from the list of customers that the user can manage.
         * @var integer[]
         */
        public $DeleteCustomerIds;
    }
}
