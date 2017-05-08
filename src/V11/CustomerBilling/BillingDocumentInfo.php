<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a billing document identification object that contains information about a billing document, such as the billing document identifier, billing document amount, and account identifier.
     * @link http://msdn.microsoft.com/en-us/library/dn469176(v=msads.110).aspx BillingDocumentInfo Data Object
     * 
     * @used-by GetBillingDocumentsInfoResponse
     */
    final class BillingDocumentInfo
    {
        /**
         * The identifier of the account for which the billing document was generated.
         * @var integer
         */
        public $AccountId;

        /**
         * The account name.
         * @var string
         */
        public $AccountName;

        /**
         * The account number.
         * @var string
         */
        public $AccountNumber;

        /**
         * The amount of the billing document.
         * @var double
         */
        public $Amount;

        /**
         * The currency of the billing document.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The date of the billing document.
         * @var \DateTime
         */
        public $DocumentDate;

        /**
         * An identifier of the billing document.
         * @var integer
         */
        public $DocumentId;
    }

}
