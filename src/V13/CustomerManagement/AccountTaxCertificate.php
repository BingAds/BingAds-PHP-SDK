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
         * Reserved.
         * @var string
         */
        public $TaxCertificateBlobContainerName;

        /**
         * Reserved.
         * @var KeyValuePairOfstringbase64Binary[]
         */
        public $TaxCertificates;

        /**
         * Reserved.
         * @var TaxCertificateStatus
         */
        public $Status;
    }

}
