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
        /** Reserved. */
        const Valid = 'Valid';

        /** Reserved. */
        const Invalid = 'Invalid';

        /** Reserved. */
        const Pending = 'Pending';
    }

}
