<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a user identification object that contains information that identifies a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/userinfo?view=bingads-11 UserInfo Data Object
     * 
     * @used-by GetUsersInfoResponse
     */
    final class UserInfo
    {
        /**
         * The system generated identifier of the user.
         * @var integer
         */
        public $Id;

        /**
         * The logon user name of the user.
         * @var string
         */
        public $UserName;
    }

}
