<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfo Request Object
     * 
     * @uses ApplicationType
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

        /**
         * A value that determines whether to return results for advertising customers or publishing customers.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }
}
