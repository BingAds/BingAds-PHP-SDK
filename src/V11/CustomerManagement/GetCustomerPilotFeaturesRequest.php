<?php
// Generated on 5/7/2017 5:48:10 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.110).aspx GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer whose list of pilot programs you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
