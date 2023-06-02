<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getbillingdocuments?view=bingads-13 GetBillingDocuments Request Object
     * 
     * @uses BillingDocumentInfo
     * @uses DataType
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsRequest
    {
        /**
         * Identifies the list of billing documents that you want to get.
         * @var BillingDocumentInfo[]
         */
        public $BillingDocumentsInfo;

        /**
         * The format to use to generate the billing document.
         * @var DataType
         */
        public $Type;
    }
}
