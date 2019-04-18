<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getcustomersinfo?view=bingads-13 GetCustomersInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomersInfo
     */
    final class GetCustomersInfoRequest
    {
        /**
         * A partial or full name of the customers that you want to get.
         * @var string
         */
        public $CustomerNameFilter;

        /**
         * A nonzero positive integer that specifies the number of customers to return in the result.
         * @var integer
         */
        public $TopN;
    }
}
