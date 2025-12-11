<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/distributecoupons?view=bingads-13 DistributeCoupons Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerBillingService::DistributeCoupons
     */
    final class DistributeCouponsResponse
    {
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
