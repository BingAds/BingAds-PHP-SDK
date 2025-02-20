<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Claim feature adoption coupons.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/claimfeatureadoptioncoupons?view=bingads-13 ClaimFeatureAdoptionCoupons Request Object
     * 
     * @uses KeyValueEntityOflongstring
     * @used-by BingAdsCustomerBillingService::ClaimFeatureAdoptionCoupons
     */
    final class ClaimFeatureAdoptionCouponsRequest
    {
        /**
         * A list of account id and coupon code pairs.
         * @var KeyValueEntityOflongstring[]
         */
        public $AccountCouponPairs;
    }
}
