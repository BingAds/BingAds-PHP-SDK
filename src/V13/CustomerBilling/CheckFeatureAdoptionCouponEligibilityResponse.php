<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Check the FAC eligibility of an account.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/checkfeatureadoptioncouponeligibility?view=bingads-13 CheckFeatureAdoptionCouponEligibility Response Object
     * 
     * @used-by BingAdsCustomerBillingService::CheckFeatureAdoptionCouponEligibility
     */
    final class CheckFeatureAdoptionCouponEligibilityResponse
    {
        /**
         * The IDs of eligible accounts.
         * @var integer[]
         */
        public $EligibleAccountIds;
    }
}
