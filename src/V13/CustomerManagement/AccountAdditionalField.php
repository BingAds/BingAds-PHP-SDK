<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a list of optional account properties that you can request when calling GetAccount.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/accountadditionalfield?view=bingads-13 AccountAdditionalField Value Set
     * 
     * @used-by GetAccountRequest
     */
    final class AccountAdditionalField
    {
        /** Request that the TaxCertificate element be included within each returned AdvertiserAccount object. */
        const TaxCertificate = 'TaxCertificate';
    }

}
