<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * The key and value pair of string and base64Binary values defined by the Customer Management service.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/keyvaluepairofstringbase64binary?view=bingads-13 KeyValuePairOfstringbase64Binary Data Object
     * 
     * @used-by AccountTaxCertificate
     */
    final class KeyValuePairOfstringbase64Binary
    {
        /**
         * The name of the setting.
         * @var string
         */
        public $key;

        /**
         * The value of the setting.
         * @var base64Binary
         */
        public $value;
    }

}
