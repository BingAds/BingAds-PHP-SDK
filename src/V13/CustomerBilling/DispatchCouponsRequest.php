<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Dispatch coupons of the specified coupon class name owned by the specified customer.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/dispatchcoupons?view=bingads-13 DispatchCoupons Request Object
     * 
     * @used-by BingAdsCustomerBillingService::DispatchCoupons
     */
    final class DispatchCouponsRequest
    {
        /**
         * Email addresses to which the coupons are dispatched.
         * @var string[]
         */
        public $SendToEmails;

        /**
         * The identifier of the customer that the coupon class belongs to.
         * @var integer
         */
        public $CustomerId;

        /**
         * The name of coupon class whose available coupons are dispatched.
         * @var string
         */
        public $CouponClassName;
    }
}
