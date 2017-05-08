<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.110).aspx GetBillingDocuments Response Object
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
