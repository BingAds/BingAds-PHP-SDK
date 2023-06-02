<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Redeems a coupon to the specified account.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/redeemcoupon?view=bingads-13 RedeemCoupon Request Object
     * 
     * @used-by BingAdsCustomerBillingService::RedeemCoupon
     */
    final class RedeemCouponRequest
    {
        /**
         * The identifier of the account to which the coupon is redeemed.
         * @var integer
         */
        public $AccountId;

        /**
         * The code of coupon to redeem.
         * @var string
         */
        public $CouponCode;
    }
}
