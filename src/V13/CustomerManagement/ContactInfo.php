<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the contact information for a user.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/contactinfo?view=bingads-13 ContactInfo Data Object
     * 
     * @uses Address
     * @uses EmailFormat
     * @used-by User
     */
    final class ContactInfo
    {
        /**
         * The address of the user.
         * @var Address
         */
        public $Address;

        /**
         * A value that determines whether the user should be contacted by telephone.
         * @var boolean
         */
        public $ContactByPhone;

        /**
         * A value that determines whether the user should be contacted by postal mail.
         * @var boolean
         */
        public $ContactByPostalMail;

        /**
         * The email address is used to send the account activation notification to the user, and can contain a maximum of 100 characters.
         * @var string
         */
        public $Email;

        /**
         * The format of the body of an email message to use when correspondence is sent to the user (this does not apply to the activation notification email message).
         * @var EmailFormat
         */
        public $EmailFormat;

        /**
         * The fax telephone number of the user.
         * @var string
         */
        public $Fax;

        /**
         * The home telephone number of the user.
         * @var string
         */
        public $HomePhone;

        /**
         * The system-generated identifier of the object.
         * @var integer
         */
        public $Id;

        /**
         * The mobile telephone number of the user.
         * @var string
         */
        public $Mobile;

        /**
         * The primary telephone number of the user.
         * @var string
         */
        public $Phone1;

        /**
         * An alternate telephone number for the user.
         * @var string
         */
        public $Phone2;
    }

}
