<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/getbillingdocuments?view=bingads-13 GetBillingDocuments Response Object
     * 
     * @uses BillingDocument
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsResponse
    {
        /**
         * The list of billing documents that were retrieved.
         * @var BillingDocument[]
         */
        public $BillingDocuments;
    }
}
