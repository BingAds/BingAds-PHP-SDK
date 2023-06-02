<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * The key and value pair of string and string values.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
     * 
     * @used-by AdvertiserAccount
     * @used-by ClientLink
     * @used-by Customer
     * @used-by User
     */
    final class KeyValuePairOfstringstring
    {
        /**
         * The name of the setting.
         * @var string
         */
        public $key;

        /**
         * The value of the setting.
         * @var string
         */
        public $value;
    }

}
