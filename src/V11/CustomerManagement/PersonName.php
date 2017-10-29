<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the name of a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/personname?version=11 PersonName Data Object
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
