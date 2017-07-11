<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the roles of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.110).aspx UpdateUserRoles Request Object
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
         * The identifier of the role to which the values specified in the NewAccounts or NewCustomers element applies to, if set.
         * @var integer
         */
        public $NewRoleId;
        public $NewAccountIds;
        public $NewCustomerIds;

        /**
         * The identifier of the role to which the values specified in the DeleteAccounts or DeleteCustomers element applies, if set.
         * @var integer
         */
        public $DeleteRoleId;
        public $DeleteAccountIds;
        public $DeleteCustomerIds;
    }
}
