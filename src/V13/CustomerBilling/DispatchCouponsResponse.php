<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Dispatch coupons of the specified coupon class name owned by the specified customer.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/dispatchcoupons?view=bingads-13 DispatchCoupons Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCustomerBillingService::DispatchCoupons
     */
    final class DispatchCouponsResponse
    {
        /**
         * An array of BatchError objects that correspond to any email addresses where the coupon code could not be sent to.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
