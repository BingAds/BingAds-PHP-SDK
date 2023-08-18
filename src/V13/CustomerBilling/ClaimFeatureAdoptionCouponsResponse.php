<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/claimfeatureadoptioncoupons?view=bingads-13 ClaimFeatureAdoptionCoupons Response Object
     * 
     * @uses KeyValuePairOflongdateTime
     * @uses OperationError
     * @used-by BingAdsCustomerBillingService::ClaimFeatureAdoptionCoupons
     */
    final class ClaimFeatureAdoptionCouponsResponse
    {
        /**
         * Reserved.
         * @var KeyValuePairOflongdateTime[]
         */
        public $ClaimedDateByAccountId;

        /**
         * Reserved.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * Reserved.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
