<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/checkfeatureadoptioncouponeligibility?view=bingads-13 CheckFeatureAdoptionCouponEligibility Request Object
     * 
     * @used-by BingAdsCustomerBillingService::CheckFeatureAdoptionCouponEligibility
     */
    final class CheckFeatureAdoptionCouponEligibilityRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $FeatureId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $AccountIds;
    }
}
