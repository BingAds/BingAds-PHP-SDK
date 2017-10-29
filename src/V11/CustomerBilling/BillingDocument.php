<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a billing document.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/billingdocument?version=11 BillingDocument Data Object
     * 
     * @uses DataType
     * @used-by GetBillingDocumentsResponse
     * @used-by GetDisplayInvoicesResponse
     * @used-by GetKOHIOInvoicesResponse
     */
    final class BillingDocument
    {
        /**
         * The billing document.
         * @var base64Binary
         */
        public $Data;

        /**
         * The identifier of the billing document.
         * @var integer
         */
        public $Id;

        /**
         * The format of the billing document.
         * @var DataType
         */
        public $Type;
    }

}
