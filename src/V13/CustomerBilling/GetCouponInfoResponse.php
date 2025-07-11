<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets information about coupons associated with a customer ID.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getcouponinfo?view=bingads-13 GetCouponInfo Response Object
     * 
     * @uses CouponInfoData
     * @used-by BingAdsCustomerBillingService::GetCouponInfo
     */
    final class GetCouponInfoResponse
    {
        /**
         * A list of coupon info data objects.
         * @var CouponInfoData[]
         */
        public $CouponInfoData;
    }
}
