<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/couponclaiminfo?view=bingads-13 CouponClaimInfo Data Object
     * 
     * @used-by Coupon
     */
    final class CouponClaimInfo
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var string
         */
        public $AccountNumber;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ClaimDate;
    }

}
