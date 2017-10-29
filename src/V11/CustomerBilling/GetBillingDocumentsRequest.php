<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/getbillingdocuments?version=11 GetBillingDocuments Request Object
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
