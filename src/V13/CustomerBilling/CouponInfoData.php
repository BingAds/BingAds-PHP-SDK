<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/couponinfodata?view=bingads-13 CouponInfoData Data Object
     * 
     * @used-by GetCouponInfoResponse
     */
    final class CouponInfoData
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer
         */
        public $CouponId;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ClaimDate;

        /**
         * Reserved.
         * @var integer
         */
        public $Status;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $RedemptionDate;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * Reserved.
         * @var double
         */
        public $PercentOff;

        /**
         * Reserved.
         * @var float
         */
        public $CouponValue;

        /**
         * Reserved.
         * @var float
         */
        public $UpfrontSpending;
    }

}
