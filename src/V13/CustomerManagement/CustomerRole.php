<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines account access rights for a person who acts on behalf of a specific customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/customerrole?view=bingads-13 CustomerRole Data Object
     * 
     * @used-by GetUserResponse
     */
    final class CustomerRole
    {
        /**
         * The role that the user has when accessing advertiser accounts through the CustomerId.
         * @var integer
         */
        public $RoleId;

        /**
         * The identifier of the customer where the user has either signed up or has some account hierarchy relationship.
         * @var integer
         */
        public $CustomerId;

        /**
         * The list of accounts that the user can access in the customer.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The list of linked accounts that the user can access through the CustomerId as an agency on behalf of another customer.
         * @var integer[]
         */
        public $LinkedAccountIds;

        /**
         * Determines whether the user's access to the accounts is restricted by customer hierarchy i.e., customer level client linking.
         * @var string
         */
        public $CustomerLinkPermission;
    }

}
