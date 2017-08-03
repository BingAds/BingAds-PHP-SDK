<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the name of a user.
     * @link http://msdn.microsoft.com/en-us/library/ff728429(v=msads.110).aspx PersonName Data Object
     * 
     * @used-by User
     */
    final class PersonName
    {
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
         * The middle initial of the user.
         * @var string
         */
        public $MiddleInitial;
    }

}
