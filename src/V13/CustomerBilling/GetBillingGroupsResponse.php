<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Retrieves billing groups.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getbillinggroups?view=bingads-13 GetBillingGroups Response Object
     * 
     * @uses BillingGroup
     * @used-by BingAdsCustomerBillingService::GetBillingGroups
     */
    final class GetBillingGroupsResponse
    {
        /**
         * The billing groups that belong to the customer.
         * @var BillingGroup[]
         */
        public $BillingGroups;
    }
}
