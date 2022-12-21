<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines personal and business contact information about a Microsoft Advertising user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/user?view=bingads-13 User Data Object
     * 
     * @uses ContactInfo
     * @uses LCID
     * @uses PersonName
     * @uses SecretQuestion
     * @uses UserLifeCycleStatus
     * @uses KeyValuePairOfstringstring
     */
    final class User
    {
        /**
         * The user's contact information.
         * @var ContactInfo
         */
        public $ContactInfo;

        /**
         * The identifier of the customer for this user to access.
         * @var integer
         */
        public $CustomerId;

        /**
         * The Microsoft Advertising identifier of the user.
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
         * This element is reserved for internal use and will be removed from a future version of the API.
         * @var string
         */
        public $Password;

        /**
         * This element is reserved for internal use and will be removed from a future version of the API.
         * @var string
         */
        public $SecretAnswer;

        /**
         * This element is reserved for internal use and will be removed from a future version of the API.
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
         * The logon user name of the user.
         * @var string
         */
        public $UserName;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * Reserved.
         * @var string
         */
        public $AuthenticationToken;
    }

}
