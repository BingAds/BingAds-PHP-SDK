<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Retrieves billing groups.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getbillinggroups?view=bingads-13 GetBillingGroups Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetBillingGroups
     */
    final class GetBillingGroupsRequest
    {
        /**
         * The Microsoft Advertising identifier of the customer whose billing groups you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
