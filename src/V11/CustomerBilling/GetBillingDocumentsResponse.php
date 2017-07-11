<?php
// Generated on 7/10/2017 3:08:15 PM

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
