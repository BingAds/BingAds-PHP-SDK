<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the CouponRedemption Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/couponredemption?view=bingads-13 CouponRedemption Data Object
     * 
     * @used-by Coupon
     */
    final class CouponRedemption
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var string
         */
        public $AccountNumber;

        /**
         * Reserved.
         * @var double
         */
        public $SpendToThreshold;

        /**
         * Reserved.
         * @var double
         */
        public $Balance;

        /**
         * Reserved.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $RedemptionDate;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ActivationDate;
    }

}
