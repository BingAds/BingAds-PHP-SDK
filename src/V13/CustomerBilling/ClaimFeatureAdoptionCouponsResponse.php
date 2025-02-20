<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Claim feature adoption coupons.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/claimfeatureadoptioncoupons?view=bingads-13 ClaimFeatureAdoptionCoupons Response Object
     * 
     * @uses KeyValueEntityOflongdateTime
     * @uses OperationError
     * @used-by BingAdsCustomerBillingService::ClaimFeatureAdoptionCoupons
     */
    final class ClaimFeatureAdoptionCouponsResponse
    {
        /**
         * The date a claim was made for an account.
         * @var KeyValueEntityOflongdateTime[]
         */
        public $ClaimedDateByAccountId;

        /**
         * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * An array of OperationError objects that correspond to any email addresses where the coupon code could not be sent to.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
