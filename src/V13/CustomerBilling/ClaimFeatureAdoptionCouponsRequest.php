<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/claimfeatureadoptioncoupons?view=bingads-13 ClaimFeatureAdoptionCoupons Request Object
     * 
     * @uses KeyValuePairOflongstring
     * @used-by BingAdsCustomerBillingService::ClaimFeatureAdoptionCoupons
     */
    final class ClaimFeatureAdoptionCouponsRequest
    {
        /**
         * Reserved.
         * @var KeyValuePairOflongstring[]
         */
        public $AccountCouponPairs;
    }
}
