<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Response Object
     * 
     * @uses BillingDocumentInfo
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoResponse
    {
        /**
         * The list of billing document information objects that were retrieved.
         * @var BillingDocumentInfo[]
         */
        public $BillingDocumentsInfo;
    }
}
