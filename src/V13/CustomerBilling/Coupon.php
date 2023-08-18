<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a coupon.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/coupon?view=bingads-13 Coupon Data Object
     * 
     * @uses CouponRedemption
     * @uses CouponClaimInfo
     * @used-by SearchCouponsResponse
     */
    final class Coupon
    {
        /**
         * The code that can be used to redeem the coupon.
         * @var string
         */
        public $CouponCode;

        /**
         * The class name that the coupon was minted from.
         * @var string
         */
        public $ClassName;

        /**
         * The coupon's type.
         * @var string
         */
        public $CouponType;

        /**
         * The value amount of the coupon.
         * @var double
         */
        public $Amount;

        /**
         * The coupon can't be consumed until the account's spend reaches this threshold from the time coupon was redeemed.
         * @var double
         */
        public $SpendThreshold;

        /**
         * The currency of the coupon amount and spend threshold.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The percent off coupon value.
         * @var double
         */
        public $PercentOff;

        /**
         * Active days since coupon has been redeemed.
         * @var integer
         */
        public $ActiveDuration;

        /**
         * The coupon expiration date.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The coupon cannot be redeemed before the start date.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The last date that the coupon can be redeemed.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The email address the coupon has been emailed by the DispatchCoupons operation.
         * @var string
         */
        public $SendToEmail;

        /**
         * The date the coupon was emailed by the DispatchCoupons operation.
         * @var \DateTime
         */
        public $SendToDate;

        /**
         * Has the coupon been redeemed.
         * @var boolean
         */
        public $IsRedeemed;

        /**
         * Contains redemption and consuming details.
         * @var CouponRedemption
         */
        public $RedemptionInfo;

        /**
         * Reserved.
         * @var CouponClaimInfo
         */
        public $ClaimInfo;
    }

}
