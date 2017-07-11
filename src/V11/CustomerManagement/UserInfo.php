<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a user identification object that contains information that identifies a user.
     * @link http://msdn.microsoft.com/en-us/library/ff728438(v=msads.110).aspx UserInfo Data Object
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
