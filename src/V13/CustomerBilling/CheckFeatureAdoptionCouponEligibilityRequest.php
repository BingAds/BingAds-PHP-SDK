<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Check the FAC eligibility of an account.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/checkfeatureadoptioncouponeligibility?view=bingads-13 CheckFeatureAdoptionCouponEligibility Request Object
     * 
     * @used-by BingAdsCustomerBillingService::CheckFeatureAdoptionCouponEligibility
     */
    final class CheckFeatureAdoptionCouponEligibilityRequest
    {
        /**
         * The identifier of the feature.
         * @var integer
         */
        public $FeatureId;

        /**
         * A list of account identifiers to check for eligibility.
         * @var integer[]
         */
        public $AccountIds;
    }
}
