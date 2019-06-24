<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
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
