<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.110).aspx GetBillingDocuments Request Object
     * 
     * @uses DataType
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsRequest
    {
        /**
         * A list of identifiers of the billing documents to get.
         * @var integer[]
         */
        public $DocumentIds;

        /**
         * The format to use to generate the billing document.
         * @var DataType
         */
        public $Type;
    }
}
