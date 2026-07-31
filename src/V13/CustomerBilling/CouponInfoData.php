<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines an object containing coupon info.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/couponinfodata?view=bingads-13 CouponInfoData Data Object
     * 
     * @used-by GetCouponInfoResponse
     */
    final class CouponInfoData
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The coupon ID.
         * @var integer
         */
        public $CouponId;

        /**
         * The coupon's claim date.
         * @var \DateTime
         */
        public $ClaimDate;

        /**
         * The coupon's status.
         * @var integer
         */
        public $Status;

        /**
         * The date the coupon was redeemed.
         * @var \DateTime
         */
        public $RedemptionDate;

        /**
         * The coupon's expiration date.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The coupon's discount percentage.
         * @var double
         */
        public $PercentOff;

        /**
         * The coupon's value.
         * @var float
         */
        public $CouponValue;

        /**
         * The value of the upfront spending coupon.
         * @var float
         */
        public $UpfrontSpending;

        /**
         * The length of time in which the coupon may be used.
         * @var integer
         */
        public $ActiveDuration;

        /**
         * The amount that must be spent before the coupon is applied.
         * @var float
         */
        public $SpendToThreshold;

        /**
         * The coupon's start date.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The coupon's end date.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The balance after the coupon is applied.
         * @var float
         */
        public $Balance;

        /**
         * The currency code for the coupon.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The feature ID attached to the coupon.
         * @var integer
         */
        public $FeatureId;

        /**
         * The type of coupon.
         * @var integer
         */
        public $CouponType;
    }

}
