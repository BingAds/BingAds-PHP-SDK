<?php
// Generated on 6/7/2017 5:53:03 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a user.
     * @link http://msdn.microsoft.com/en-us/library/bb671824(v=msads.90).aspx User Data Object
     * 
     * @uses ContactInfo
     * @uses ApplicationType
     * @uses LCID
     * @uses PersonName
     * @uses SecretQuestion
     * @uses UserLifeCycleStatus
     * @used-by GetCurrentUserResponse
     * @used-by GetUserResponse
     * @used-by UpdateUserRequest
     */
    final class User
    {
        /**
         * The user's contact information.
         * @var ContactInfo
         */
        public $ContactInfo;

        /**
         * Confirms that the customer to whom this user belongs is an advertiser.
         * @var ApplicationType
         */
        public $CustomerAppScope;

        /**
         * The identifier of the customer to whom this user belongs.
         * @var integer
         */
        public $CustomerId;

        /**
         * The system generated identifier of the user.
         * @var integer
         */
        public $Id;

        /**
         * The user's job title.
         * @var string
         */
        public $JobTitle;

        /**
         * The identifier of the last user to update the user's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that that the user information was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The locale to use when sending correspondence to the user by email or postal mail.
         * @var LCID
         */
        public $Lcid;

        /**
         * The name of the user.
         * @var PersonName
         */
        public $Name;

        /**
         * The user's Bing Ads managed sign-in password.
         * @var string
         */
        public $Password;

        /**
         * The answer to the secret question that is specified in the SecretQuestion element.
         * @var string
         */
        public $SecretAnswer;

        /**
         * A question from a list of predefined questions that the user selects to use as his or her secret question.
         * @var SecretQuestion
         */
        public $SecretQuestion;

        /**
         * The status of the user.
         * @var UserLifeCycleStatus
         */
        public $UserLifeCycleStatus;

        /**
         * A time-stamp value that the system uses internally to reconcile updates when you call UpdateUser or DeleteUser.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * If the value of IsMigratedToMicrosoftAccount is false, this element contains the user's Bing Ads managed sign-in user name.
         * @var string
         */
        public $UserName;

        /**
         * If true, the user can be authenticated using a Microsoft Account.
         * @var boolean
         */
        public $IsMigratedToMicrosoftAccount;
    }

}
