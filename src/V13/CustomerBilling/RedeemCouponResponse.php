<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Redeems a coupon to the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/redeemcoupon?view=bingads-13 RedeemCoupon Response Object
     * 
     * @used-by BingAdsCustomerBillingService::RedeemCoupon
     */
    final class RedeemCouponResponse
    {
        /**
         * The date and time that the coupon was redeemed.
         * @var \DateTime
         */
        public $RedemptionDate;
    }
}
