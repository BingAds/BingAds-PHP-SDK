<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Defines a billing document.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/billingdocument?view=bingads-12 BillingDocument Data Object
     * 
     * @uses DataType
     * @used-by GetBillingDocumentsResponse
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
