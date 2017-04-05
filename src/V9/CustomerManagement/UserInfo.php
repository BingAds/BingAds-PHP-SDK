<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a user identification object that contains information that identifies a user.
     * @link http://msdn.microsoft.com/en-us/library/ff728438(v=msads.90).aspx UserInfo Data Object
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
