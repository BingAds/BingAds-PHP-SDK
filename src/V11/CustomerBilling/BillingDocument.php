<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a billing document.
     * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.110).aspx BillingDocument Data Object
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
