<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the Coupon Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/coupon?view=bingads-13 Coupon Data Object
     * 
     * @uses CouponRedemption
     * @used-by SearchCouponsResponse
     */
    final class Coupon
    {
        /**
         * Reserved.
         * @var string
         */
        public $CouponCode;

        /**
         * Reserved.
         * @var string
         */
        public $ClassName;

        /**
         * Reserved.
         * @var string
         */
        public $CouponType;

        /**
         * Reserved.
         * @var double
         */
        public $Amount;

        /**
         * Reserved.
         * @var double
         */
        public $SpendThreshold;

        /**
         * Reserved.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Reserved.
         * @var double
         */
        public $PercentOff;

        /**
         * Reserved.
         * @var integer
         */
        public $ActiveDuration;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ExpirationDate;

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
         * @var string
         */
        public $SendToEmail;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $SendToDate;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsRedeemed;

        /**
         * Reserved.
         * @var CouponRedemption
         */
        public $RedemptionInfo;
    }

}
