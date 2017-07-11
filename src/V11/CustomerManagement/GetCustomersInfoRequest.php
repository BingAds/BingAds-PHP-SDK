<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.110).aspx GetCustomersInfo Request Object
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
