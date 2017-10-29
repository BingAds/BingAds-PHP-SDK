<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/keyvaluepairofstringstring?version=11 KeyValuePairOfstringstring Data Object
     * 
     * @used-by Account
     * @used-by AdvertiserAccount
     * @used-by ClientLink
     * @used-by Customer
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
