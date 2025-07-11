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
         * Reserved.
         * @var integer
         */
        public $ActiveDuration;

        /**
         * Reserved.
         * @var float
         */
        public $SpendToThreshold;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved.
         * @var float
         */
        public $Balance;

        /**
         * Reserved.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Reserved.
         * @var integer
         */
        public $FeatureId;

        /**
         * Reserved.
         * @var integer
         */
        public $CouponType;
    }

}
