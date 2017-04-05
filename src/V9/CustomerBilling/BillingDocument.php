<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines a billing document.
     * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.90).aspx BillingDocument Data Object
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
