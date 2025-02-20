<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a KeyValueEntityOflongdateTime data object.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/keyvalueentityoflongdatetime?view=bingads-13 KeyValueEntityOflongdateTime Data Object
     * 
     * @used-by ClaimFeatureAdoptionCouponsResponse
     */
    final class KeyValueEntityOflongdateTime
    {
        /**
         * The key to the value.
         * @var integer
         */
        public $Key;

        /**
         * The value mapped to the key.
         * @var \DateTime
         */
        public $Value;
    }

}
