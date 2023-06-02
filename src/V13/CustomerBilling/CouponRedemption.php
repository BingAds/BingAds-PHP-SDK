<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Contains redemption and consuming details.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/couponredemption?view=bingads-13 CouponRedemption Data Object
     * 
     * @used-by Coupon
     */
    final class CouponRedemption
    {
        /**
         * The identifier of the account to which the coupon was redeemed.
         * @var integer
         */
        public $AccountId;

        /**
         * The account number.
         * @var string
         */
        public $AccountNumber;

        /**
         * The coupon can't be consumed until the account's spend reaches this threshold from the time coupon was redeemed.
         * @var double
         */
        public $SpendToThreshold;

        /**
         * The remaining amount of the coupon in account currency.
         * @var double
         */
        public $Balance;

        /**
         * The currency of the coupon balance and spend threshold.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The date that coupon was redeemed to the account.
         * @var \DateTime
         */
        public $RedemptionDate;

        /**
         * The coupon expiration date.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The date that the coupon is ready to be consumed.
         * @var \DateTime
         */
        public $ActivationDate;
    }

}
