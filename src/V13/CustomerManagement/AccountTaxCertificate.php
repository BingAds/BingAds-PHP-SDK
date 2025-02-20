<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the AccountTaxCertificate Data Object.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/accounttaxcertificate?view=bingads-13 AccountTaxCertificate Data Object
     * 
     * @uses KeyValuePairOfstringbase64Binary
     * @uses TaxCertificateStatus
     * @used-by AdvertiserAccount
     */
    final class AccountTaxCertificate
    {
        /**
         * The container name of the tax certificate.
         * @var string
         */
        public $TaxCertificateBlobContainerName;

        /**
         * A list of tax certificates.
         * @var KeyValuePairOfstringbase64Binary[]
         */
        public $TaxCertificates;

        /**
         * The status of the tax certificate: Valid, Invalid, or Pending.
         * @var TaxCertificateStatus
         */
        public $Status;
    }

}
