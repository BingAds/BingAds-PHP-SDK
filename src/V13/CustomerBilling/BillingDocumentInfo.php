<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a billing document identification object that contains information about a billing document, such as the billing document identifier, billing document amount, and account identifier.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/billingdocumentinfo?view=bingads-13 BillingDocumentInfo Data Object
     * 
     * @used-by GetBillingDocumentsRequest
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

        /**
         * The identifier of the customer for which the billing document was generated.
         * @var integer
         */
        public $CustomerId;
    }

}
