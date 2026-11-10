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
         * The Microsoft Advertising identifier of the billing group.
         * @var integer
         */
        public $BillingGroupId;

        /**
         * The Microsoft Advertising identifier of the customer that owns the billing group.
         * @var integer
         */
        public $CustomerId;

        /**
         * The billing group name.
         * @var string
         */
        public $Name;

        /**
         * The billing group description.
         * @var string
         */
        public $Description;
    }

}
