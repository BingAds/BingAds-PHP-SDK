<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the billing group data object.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/billinggroup?view=bingads-13 BillingGroup Data Object
     * 
     * @used-by GetBillingGroupsResponse
     */
    final class BillingGroup
    {
        /**
         * Reserved.
         * @var integer
         */
        public $BillingGroupId;

        /**
         * Reserved.
         * @var integer
         */
        public $CustomerId;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var string
         */
        public $Description;
    }

}
