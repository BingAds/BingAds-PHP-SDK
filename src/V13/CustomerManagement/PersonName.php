<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the name of a user.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/personname?view=bingads-13 PersonName Data Object
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
