<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines an object containing coupon claim information.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/couponclaiminfo?view=bingads-13 CouponClaimInfo Data Object
     * 
     * @used-by Coupon
     */
    final class CouponClaimInfo
    {
        /**
         * The identifier of the account related to the claim.
         * @var integer
         */
        public $AccountId;

        /**
         * The account number of the account related to the claim.
         * @var string
         */
        public $AccountNumber;

        /**
         * The date of the claim.
         * @var \DateTime
         */
        public $ClaimDate;
    }

}
