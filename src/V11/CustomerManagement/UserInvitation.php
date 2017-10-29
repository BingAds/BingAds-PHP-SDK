<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a user invitation.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/userinvitation?version=11 UserInvitation Data Object
     * 
     * @uses UserRole
     * @uses LCID
     * @used-by SearchUserInvitationsResponse
     * @used-by SendUserInvitationRequest
     */
    final class UserInvitation
    {
        /**
         * A system generated unique identifier for the user invitation.
         * @var integer
         */
        public $Id;

        /**
         * The first name of the user.
         * @var string
         */
        public $FirstName;

        /**
         * The last name of the user.
         * @var string
         */
        public $LastName;

        /**
         * The email address corresponding to the user's Microsoft account.
         * @var string
         */
        public $Email;

        /**
         * The identifier of the customer this user is invited to manage.
         * @var integer
         */
        public $CustomerId;

        /**
         * The user role, which determines the level of access that the user has to the accounts specified in the AccountIds element.
         * @var UserRole
         */
        public $Role;

        /**
         * An array of identifiers of the accounts that the user can manage.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The date and time that the user invitation will expire.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The locale to use when sending correspondence to the user by email or postal mail.
         * @var LCID
         */
        public $Lcid;
    }

}
