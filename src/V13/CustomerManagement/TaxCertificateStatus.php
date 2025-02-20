<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the TaxCertificateStatus Value Set.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/taxcertificatestatus?view=bingads-13 TaxCertificateStatus Value Set
     * 
     * @used-by AccountTaxCertificate
     */
    final class TaxCertificateStatus
    {
        /** The status of the tax certificate is Valid. */
        const Valid = 'Valid';

        /** The status of the tax certificate is Invalid. */
        const Invalid = 'Invalid';

        /** The status of the tax certificate is Pending. */
        const Pending = 'Pending';
    }

}
