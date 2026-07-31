<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Distribute coupons of the specified coupon class name to the specified accounts.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/distributecoupons?view=bingads-13 DistributeCoupons Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerBillingService::DistributeCoupons
     */
    final class DistributeCouponsResponse
    {
        /**
         * An array of operation errors that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * An array of OperationError objects that correspond to any email addresses where the coupon could not be distributed.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
