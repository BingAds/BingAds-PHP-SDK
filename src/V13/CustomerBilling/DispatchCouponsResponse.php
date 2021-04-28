<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the DispatchCoupons Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/dispatchcoupons?view=bingads-13 DispatchCoupons Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCustomerBillingService::DispatchCoupons
     */
    final class DispatchCouponsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
